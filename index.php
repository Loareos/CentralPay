<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
</head>

<body>
<form method="post" data-centralpay="form" action="action.php" class="form-general" enctype='multipart/form-data'>
    <div data-centralpay="errors"></div>

    <h4 class="title">Formulaire de demande de payement</h4>

    <div class="form-row" data-toggle="popover-example-data">
        <div class="form-group col-6">
            <div class="has-feedback input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"></div>
                </div>
                <input data-centralpay="firstName" type="text" name="firstName"
                       autocomplete="off" class="form-control"
                       placeholder="First name" required="required" />
            </div>
        </div>

        <div class="form-group col-6">
            <div class="has-feedback input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"></div>
                </div>
                <input data-centralpay="lastName" type="text" name="lastName"
                       autocomplete="off" class="form-control"
                       placeholder="Last name" required="required" />
            </div>
        </div>
    </div>

    <div class="form-row" data-form="breakdown-validation" data-toggle="popover-example-data">
        <div class="form-group col-12">
            <div class="has-feedback input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"></div>
                </div>
                <input data-centralpay="email_1" type="email" name="email"
                       autocomplete="off" class="form-control"
                       placeholder="E-mail" required="required" />
            </div>
        </div>
    </div>

    <div class="form-row" data-form="breakdown-validation" data-toggle="popover-example-data">
        <div class="form-group col-12">
            <div class="has-feedback input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"></div>
                </div>
                <input data-centralpay="amount" type="number" min="0" step="0.01" name="amount"
                       autocomplete="off" class="form-control"
                       placeholder="Montant en euro" required="required"/>
            </div>
        </div>
    </div>

    <div class="form-row" data-form="breakdown-validation" data-toggle="popover-example-data">
        <div class="form-group col-12">
            <div class="has-feedback input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"></div>
                </div>
                <input data-centralpay="description" type="text" name="description"
                       autocomplete="off" class="form-control"
                       placeholder="Description" />
            </div>
        </div>
    </div>

    <input type="hidden" name="currency" value="EUR" />
    <input type="hidden" name="paymentMethod" value="TRANSACTION" />
    <div class="text-center mt-2">
        <button class="btn btn-cpay" type="submit" value="submit" data-toggle="popover"
                data-placement="bottom" data-trigger="hover">
            <div class="np-button-content">
                <span data-display="submit-value">Pay</span>
                <div class="np-loader"></div>
            </div>
        </button>
    </div>
</form>
</body>
</html>

