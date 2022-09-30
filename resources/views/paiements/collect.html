<!DOCTYPE html>
<html>

<head>
    <title>Paiement paypal et stripe</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>

    <style type="text/css">
        body {
            background: #f5f5f5
        }

        .rounded {
            border-radius: 1rem
        }

        .nav-pills .nav-link {
            color: #555
        }

        .nav-pills .nav-link.active {
            color: white
        }

        input[type="radio"] {
            margin-right: 5px
        }

        .bold {
            font-weight: bold
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Exemple d'intégration de la passerelle de paiement Stripe et paypal</h1>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default credit-card-box">
                    <div class="panel-heading display-table">
                        <div class="row display-tr">
                            <h3 class="panel-title display-td">Payment Details</h3>
                            <div class="display-td">
                                <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                            </div>
                        </div>
                    </div>
                    <div class="container py-5">
                        <!-- For demo purpose -->
                        <div class="row mb-4">
                            <div class="col-lg-8 mx-auto text-center">
                                <h1 class="display-6">Payment Forms</h1>
                            </div>
                        </div>
                        <!-- End -->
                        <div class="row">
                            <div class="col-lg-6 mx-auto">
                                <div class="card ">
                                    <div class="card-header">
                                        <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                                            <!-- Credit card form tabs -->
                                            <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                                <li class="nav-item">
                                                    <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Credit Card (stripe)</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fab fa-paypal mr-2"></i> Paypal </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- End -->
                                        <!-- Credit card form content -->
                                        <div class="tab-content">
                                            <!-- credit card info-->
                                            <div id="credit-card" class="tab-pane fade show active pt-3">
                                                <form role="form" action="{{ route('make.collect.payment') }}" method="post" class="makepayment" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                                                    <div class="form-group"> <label for="username">
                                                        <h6>Card Owner</h6>
                                                    </label> <input type="text" name="username" placeholder="Card Owner Name" required class="form-control "> </div>
                                                    <div class="form-group"> <label for="cardNumber">
                                                        <h6>Card number</h6>
                                                    </label>
                                                        <div class="input-group"> <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control  card-number" required>
                                                            <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <div class="form-group"> <label><span class="hidden-xs">
                                                                    <h6>Expiration Date</h6>
                                                                </span></label>
                                                                <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control card-expiry-month" required> <input type="number" placeholder="YY" name="" class="form-control card-expiry-year" required>                                                                    </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                                <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                                            </label> <input type="text" required class="form-control card-cvc"> </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="amount" value="100">
                                                    <input type="hidden" name="type" value="stripe">
                                                    <p class="text-muted message_"></p>
                                                    <div class="card-footer"> <button type="button" class="subscribe btn btn-primary btn-block shadow-sm"> Pay Now ($100) </button>
                                                </form>
                                                </div>
                                            </div>
                                            <!-- End -->
                                            <!-- Paypal info -->
                                            <div id="paypal" class="tab-pane fade pt-3">
                                                <h6 class="pb-2">Select your paypal account type</h6>
                                                <form action="{{ route('make.collect.payment') }}" method="post" class="makepayment">
                                                    <input type="hidden" name="amount" value="100">
                                                    <input type="hidden" name="type" value="paypal">
                                                    <button type="submit" class="btn btn-primary "><i class="fab fa-paypal mr-2"></i> Pay Now ($100) </button> </p>
                                                </form>
                                                <p class="text-muted message_"></p>
                                            </div>
                                            <!-- End -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal fade" id="paiementpendingawardmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="exampleModalLongTitle">Paiement en cours d'exécution</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                        </div>
                        <div class="modal-body">
                            <div class="d-flex flex-column align-items-center justify-content-center">
                                <div class="row">
                                    <div class="spinner-border" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <strong>Paiement en cours </strong>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal fade" id="paiementcompletawardmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="paymentcomplet">Paiement effectué</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                        </div>
                        <div class="modal-body text-center">
                            <i class=" fa-5x fa fa-check-circle  text-success"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="paiementfailawardmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="exampleModalLongTitle">Échec du paiement</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                        </div>
                        <div class="modal-body text-center">
                            <i class=" fa-5x fa fa-times-circle text-danger"></i>
                        </div>
                    </div>
                </div>
            </div>
</body>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $('.makepayment').on('submit', function(e) {
        e.preventDefault();

        $("#paiementpendingawardmodal").modal('show');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var url = $(this).data('href');
        $.post($(this).attr('action'), $(this).serialize(),
            function(response, textStatus, jqXHR) {

                    const expr = response.message;
                    switch (expr) {

                        case 'Payment Complete':
                            $("#paiementpendingawardmodal").modal('hide');
                            $("#paiementcompletawardmodal").modal('show');
                            break;
                        case 'Payment Failed':
                            $("#paiementpendingawardmodal").modal('hide');
                            $("#paiementfailawardmodal").modal('show');
                            break;
                        case 'pay with link':
                            $("#paiementpendingawardmodal").modal('hide');
                            $("#paiementinfoawardmodal").modal('show');
                            $('.message_info').html(
                                '<span>your payment was initial.<br> please click on this link to continue</span><br> <br><a class="btn btn-info" href="' +
                                response.url + '" target="_blank">continue</a>')
                            break;
                        default:
                            $("#paiementpendingawardmodal").modal('hide');
                            $("#paiementfailawardmodal").modal('show');
                            console.log(`Sorry, we are out of ${expr}.`);
                    }

            },
            "json"
        ).fail(function() {
            $("#paiementpendingawardmodal").modal('hide');
            $("#paiementfailawardmodal").modal('show');
        });
    });
</script>

</html>
