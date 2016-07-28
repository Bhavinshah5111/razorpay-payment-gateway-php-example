<button id="rzp-button1">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var options = {
        "key": "your api key",
        "amount": "5000", // 2000 paise = INR 20
        "name": "Anil Gupta : Web Consultant",
//        "description": "Purchase Description",
        "image": "http://anilgupta.co.in/images/logo.png",
        "handler": function (response) {
            alert(response.razorpay_payment_id);
        },
        "prefill": {
            "name": "Anil Gupta",
            "email": "anilrmg@gmail.com",
            "contact": "8108688880"
        },
        "notes": {
            "address": "Hello From Anil"
        },
        "theme": {
            "color": "#F37254"
        }
    };
    var rzp1 = new Razorpay(options);

    document.getElementById('rzp-button1').onclick = function (e) {
        rzp1.open();
        e.preventDefault();
    }
</script>