document.addEventListener("DOMContentLoaded", function () {
    const KHQR = (typeof BakongKHQR !== "undefined") ? BakongKHQR : null;
  
    if (KHQR) {
      const data = KHQR.khqrData;
      const info = KHQR.IndividualInfo;
  
      const optionalData = {
        currency: data.currency.usd,
        amount: 0.01,
        mobileNumber: "85512233455",
        storeLabel: "Coffee Shop",
        terminalLabel: "Cashier 1",
        purposeOfTransaction: "Oversea",
        languagePreference: "km",
        merchantNameAlternateLanguage: "ចន ស្មី",
        merchantCityAlternateLanguage: "ភ្នំពេញ",
        upiMerchantAccount: "000010344000010344ABCDEFGHIJKLMN0",
      };
  
      const individualInfo = new info("channarith_prum@aclb", "Channarith Prum", "PHNOM PENH", optionalData);
      const khqrInstance = new KHQR.BakongKHQR();
      const individual = khqrInstance.generateIndividual(individualInfo);

      // Store the QR code data for later use
        let qrCodeData = individual ? individual.data.qr : null;
        let md5Value = individual ? individual.data.md5 : null; // Extract the md5 from the individual data

        // Function to display QR code in the modal
        const displayQRCode = () => {
        if (qrCodeData) {
            const qrCodeCanvas = document.getElementById("qrCodeCanvas");

            // Generate the QR code onto the canvas
            QRCode.toCanvas(qrCodeCanvas, qrCodeData, function (error) {
            if (error) console.error(error);
            });

            // Show the modal
            const qrCodeModal = new bootstrap.Modal(document.getElementById("qrCodeModal"));
            qrCodeModal.show();
        } else {
            console.error("QR code data is not available.");
        }
        };

        // Attach event listeners for the checkout button
        const checkoutButton = document.getElementById("checkout");
        if (checkoutButton) {
            checkoutButton.addEventListener("click", displayQRCode);
        } 

        // Function to start the QR code scanning and check the transaction status
        let checkTransactionInterval;

        function startQRCodeScanner() {

            if (md5Value) {
                // Start periodic checks every 2 seconds
                checkTransactionInterval = setInterval(() => {
                    fetchTransactionStatus(md5Value);
                    console.log(3,md5Value);
                }, 5000); // Check every 5 secondss
            } else {
                console.error("MD5 value is not available.");
            }
        }

        // Attach scanning to QR code scanning process, calling this after modal shows
        $('#qrCodeModal').on('show.bs.modal', function (e) {
            startQRCodeScanner(); // Call the function to simulate scanning and transaction checking
        });

        // function fetchTransactionStatus(md5) {
        //     console.log("🚀 md5 sent to proxy:", md5); // ✅ Debug log
        
        //     const url = "http://localhost/DigitalStore/digital-assets-ecommerce-master/boss/bakong_proxy.php";
            
        //     fetch(url, {
        //         method: 'POST',
        //         headers: {
        //             'Content-Type': 'application/json'
        //         },
        //         body: JSON.stringify({ md5: md5 })
        //     })
        //     .then(response => response.text()) // Receive response as text first for debugging
        //     .then(text => {
        //         console.log("📥 Raw response from proxy:", text); // ✅ Debug response
        //         try {
        //             const data = JSON.parse(text); // Try parsing the text as JSON
        //             if (data.responseMessage === 'Success') {
        //                 window.location.href = '/index.php?msg=order+successful';
        //                 clearInterval(checkTransactionInterval);
        //                 console.log(1, 'clear');
        //             } else {
        //                 console.error("Error in response data:", data); // Add logging for other error cases
        //             }
        //         } catch (e) {
        //             console.error("Error parsing JSON response:", e); // Handle errors in JSON parsing
        //             console.log("Raw response:", text); // Log raw response in case of error
        //         }
        //     })
        //     .catch(error => {
        //         console.error('Error checking transaction:', error);
        //         clearInterval(checkTransactionInterval);
        //         console.log(2, 'clear');
        //     });
        // }
        
        function fetchTransactionStatus(md5) {
            // Get the token (replace this with your actual method of retrieving the token)
            const token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJkYXRhIjp7ImlkIjoiNzRhM2ZjOGRhYzRlNDBiYSJ9LCJpYXQiOjE3NDUzMzAwMjgsImV4cCI6MTc1MzEwNjAyOH0.Tpi2_a2t9nKy9rHbgwRKKXhR-JS9FfpU5uLaNSt8XRg";
          
            // Define the URL for the API request
            const url = "https://api-bakong.nbc.gov.kh/v1/check_transaction_by_md5";
          
            // Send an API request to check the transaction status with the token in the header and raw JSON in the body
            fetch(url, {
              method: 'POST', // API uses POST method
              headers: {
                'Content-Type': 'application/json', // Ensure the content type is set to JSON
                'Authorization': `Bearer ${token}` // Adding the token to the Authorization header
              },
              body: JSON.stringify({
                md5: md5 // Send the md5 value in the body as JSON
              })
            })
            .then(response => response.json()) // Parse the JSON response
            .then(data => {
                if (data.responseMessage === 'Success') { // If transaction is successful
                    statusElement.innerHTML = `<span class="text-success">Transaction Status: ${data.status}</span>`;
                    // Redirect to the home page after successful transaction
                    window.location.href = '/index.php?msg=order+successful'; // Redirects to the home page (or specify any other URL)
                    // Clear the interval after success
                    clearInterval(checkTransactionInterval);
                }
            })
            .catch(error => {
              console.error('Error checking transaction:', error);
              clearInterval(checkTransactionInterval);
            });
        }
          

    }else {
        console.error("BakongKHQR or its components are not loaded or defined.");
    }
});