<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mail</title>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
  rel="stylesheet"
/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="../../css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="../../css/admin.css" />
  

</head>

<body>
    <?php include '../menu.php' ?>
    <main style="margin-top: 58px">
        <div class="container pt-4">


        <div class="card">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text"><div class="form-outline">
  <input type="text" id="form12" class="form-control" />
  <label class="form-label" for="form12">Example label</label>
</div>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <button type="button" class="btn btn-primary">Button</button>
  </div>
</div>
        
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-4">
                    <div class="form-outline">
                        <input type="text" class="form-control" id="validationCustom01" value="Mark" required />
                        <label for="validationCustom01" class="form-label">First name</label>
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-outline">
                        <input type="text" class="form-control" id="validationCustom02" value="Otto" required />
                        <label for="validationCustom02" class="form-label">Last name</label>
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group form-outline">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" class="form-control" id="validationCustomUsername"
                            aria-describedby="inputGroupPrepend" required />
                        <label for="validationCustomUsername" class="form-label">Username</label>
                        <div class="invalid-feedback">Please choose a username.</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-outline">
                        <input type="text" class="form-control" id="validationCustom03" required />
                        <label for="validationCustom03" class="form-label">City</label>
                        <div class="invalid-feedback">Please provide a valid city.</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-outline">
                        <input type="text" class="form-control" id="validationCustom05" required />
                        <label for="validationCustom05" class="form-label">Zip</label>
                        <div class="invalid-feedback">Please provide a valid zip.</div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required />
                        <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </main>
    < <script>
        $(document).ready(function() {
        $('#example').DataTable({
        autoWidth: false,
        columnDefs: [{
        targets: ['_all'],
        className: 'mdc-data-table__cell',
        }, ],
        });
        });
        
        // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict';

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation');

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach((form) => {
    form.addEventListener('submit', (event) => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
})();
        
        </script>
</body>

</html>