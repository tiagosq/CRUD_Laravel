<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/app.css') }}" />
        <title>CRUD</title>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <h1>Form<span class="yellow"> Products</span></h1>
            <h2>by Felipe Kowalczuk</h2>
            <div class="container">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="well form-horizontal" action="product/save" method="post"  id="contact_form">
                    <fieldset>
                        <!-- Name -->
                        {{ csrf_field() }}
                        <div class="form-group">
                            <h3><label class="col-md-4 control-label">Name</label></h3>  
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="name" placeholder="Ex: PALIO, FUSCA..." class="form-control"  type="text">
                                </div>
                            </div>
                        </div>
                        <!-- Description-->
                        <div class="form-group">
                            <h3><label class="col-md-4 control-label" >Description</label></h3> 
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="description" placeholder="Ex: FIAT PALIO 2005" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>
                        <!-- Type -->
                        <div class="form-group"> 
                            <h3><label class="col-md-4 control-label">Type</label></h3>
                            <div class="col-md-4 selectContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                    <select name="type" class="form-control selectpicker" >
                                        <option value="">Types of vehicle</option>
                                        <option value="hatchback">hatchback</option>
                                        <option value="sedan">sedan</option>
                                        <option value="suv">suv</option>
                                        <option value="crossover">crossover</option>
                                        <option value="minivan">minivan</option>
                                        <option value="truck">truck</option>
                                        <option value="wagon">wagon</option>
                                        <option value="diesel">diesel</option>
                                        <option value="electric">electric</option>
                                        <option value="hybrid">hybrid</option>
                                        <option value="coupe">coupe</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Price-->
                        <div class="form-group">
                            <h3><label class="col-md-4 control-label">Price</label></h3>  
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input name="price" placeholder="Ex: R$34000.00" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>
                        <!-- Created_at-->
                        <!--div class="form-group">
                            <h3><label class="col-md-4 control-label">Created_at</label></h3>  
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                    <input name="created_at" placeholder="Create date" class="form-control" type="text">
                                </div>
                            </div>
                        </div-->
                        <!-- Updated_at-->
                        <!--div class="form-group">
                            <h3><label class="col-md-4 control-label">Updated_at</label></h3>  
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                    <input name="updated_at" placeholder="Update date" class="form-control" type="text">
                                </div>
                            </div>
                        </div-->
                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#contact_form').bootstrapValidator({
                    feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    name: {
                        validators: {
                            stringLength: {
                                min: 2,
                            },
                            notEmpty: {
                                message: 'Name'
                                }
                            }
                        },
                        description: {
                            validators: {
                                stringLength: {
                                    min: 2,
                                },
                                notEmpty: {
                                    message: 'Description'
                                }
                            }
                        },
                        type: {
                            validators: {
                                stringLength: {
                                    min: 2,
                                },
                                notEmpty: {
                                    message: 'Type'
                                }
                            }
                        },
                        price: {
                            validators: {
                                stringLength: {
                                    min: 2,
                                },
                                notEmpty: {
                                    message: 'Price'
                                }
                            }
                        },
                        created_at: {
                            validators: {
                                stringLength: {
                                    min: 2,
                                },
                                notEmpty: {
                                    message: 'Create date'
                                }
                            }
                        },
                        updated_at: {
                            validators: {
                                stringLength: {
                                    min: 2,
                                },
                                notEmpty: {
                                    message: 'Update date'
                                }
                            }
                        },
                    }
                })
                .on('success.form.bv', function(e) {
                    $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                    $('#contact_form').data('bootstrapValidator').resetForm();

                    // Prevent form submission
                    e.preventDefault();

                    // Get the form instance
                    var $form = $(e.target);

                    // Get the BootstrapValidator instance
                    var bv = $form.data('bootstrapValidator');

                    // Use Ajax to submit form data
                    $.post($form.attr('action'), $form.serialize(), function(result) {
                        console.log(result);
                    }, 'json');
                });     
            });
        </script>
    </body>
</html>
