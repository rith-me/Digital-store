document.addEventListener("DOMContentLoaded", function () {
    const KHQR = (typeof BakongKHQR !== "undefined") ? BakongKHQR : null;
  
    if (KHQR) {
      const data = KHQR.khqrData;
      const info = KHQR.IndividualInfo;
  
      const optionalData = {
        currency: data.currency.usd,
        amount: 0.1,
        mobileNumber: "85512233455",
        storeLabel: "Coffee Shop",
        terminalLabel: "Cashier 1",
        purposeOfTransaction: "Oversea",
        languagePreference: "km",
        merchantNameAlternateLanguage: "ចន ស្មី",
        merchantCityAlternateLanguage: "ភ្នំពេញ",
        upiMerchantAccount: "000010344000010344ABCDEFGHIJKLMN0",
      };
  
      const individualInfo = new info("jonh_smith@devb", "Jonh Smith", "PHNOM PENH", optionalData);
      const khqrInstance = new KHQR.BakongKHQR();
      const individual = khqrInstance.generateIndividual(individualInfo);
  
      // Function to display QR code in the modal
      const displayQRCode = () => {
        console.log(3,individual);
        if (individual && individual.data && individual.data.qr) {
            const qrCodeCanvas = document.getElementById("qrCodeCanvas");
    
            // Generate the QR code onto the canvas
            QRCode.toCanvas(qrCodeCanvas, individual.data.qr, function (error) {
                if (error) {
                console.error(error);
                }
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

    }else {
        console.error("BakongKHQR or its components are not loaded or defined.");
    }
});