<h2>Credit Card Form</h2>

<form id="form" action="/charge" method="get">
    <div id="cardNumber"></div>
    <div id="cardCvv"></div>
    <div id="cardExpiration"></div>
    <div id="cardHolder"></div>
    <div id="cardSubmit"></div>
</form>

<h2>PaymentRequest API</h2>

<div>
    <button type="button" id="paymentRequestPlainButton" style="display: none">Pay</button>
</div>
<script src="/themes/basic/js/globalpayments-js/dist/globalpayments.js"></script>
<script>
 tl(function(){
    GlobalPayments.configure({
        merchantId: "holbi1",
        account: "internet",
        hash: function (request) {
            return fetch("{$app->urlManager->createUrl(['global-payments/hasher'])}", {
                body: JSON.stringify(request),
                credentials: "omit",
                headers: new Headers({
                    "Content-Type": "application/json",
                }),
                method: "POST",
            }).then(function (resp) {
                console.log(resp);
                return resp.json();
            });
        },
        env: "sandbox",
    });

    GlobalPayments.on("error", function (error) {
        console.error(error);
    });

    var cardForm = GlobalPayments.ui.form({
        fields: {
            "card-number": {
                placeholder: "•••• •••• •••• ••••",
                target: "#cardNumber"
            },
            "card-expiration": {
                placeholder: "MM / YYYY",
                target: "#cardExpiration"
            },
            "card-cvv": {
                placeholder: "•••",
                target: "#cardCvv"
            },
            "card-holder-name": {
                placeholder: "Jane Smith",
                target: "#cardHolder"
            },
            "submit": {
                value: "Submit",
                target: "#cardSubmit"
            }
        }
    });

    cardForm.on("card-number", "token-success", function (resp) { console.log(resp); });
    cardForm.on("card-number", "token-error", function (resp) { console.log(resp); });

    var paymentRequestForm = GlobalPayments.paymentRequest.setup("#paymentRequestPlainButton", {
        total: {
            label: "Total",
            amount: { value: 10, currency: "USD" }
        }
    });
    console.log(paymentRequestForm);
    paymentRequestForm.on("token-success", function (resp) {
        console.log(resp);
        GlobalPayments.paymentRequest.complete("success");
    });
    paymentRequestForm.on("token-error", function (resp) { console.log(resp); });
    paymentRequestForm.on("error", function (resp) { console.log(resp); });
 });
</script>
