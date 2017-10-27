
// Form-Wizard.js
// ====================================================================
// This file should not be included in your project.
// This is just a sample how to initialize plugins or components.
//
// - ThemeOn.net -


$(document).ready(function() {




    // FORM WIZARD WITH VALIDATION
    // =================================================================
    $('#demo-bv-wz').bootstrapWizard({
        tabClass		    : 'wz-steps',
        nextSelector	    : '.next',
        previousSelector	: '.previous',
        onTabClick          : function(tab, navigation, index) {
            return false;
        },
        onInit : function(){
            $('#demo-bv-wz').find('.finish').hide().prop('disabled', true);
        },
        onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;
            var $percent = ($current/$total) * 100;
            var wdt = 100/$total;
            var lft = wdt*index;

            $('#demo-bv-wz').find('.progress-bar').css({width:wdt+'%',left:lft+"%", 'position':'relative', 'transition':'all .5s'});

            // If it's the last tab then hide the last button and show the finish instead
            if($current >= $total) {
                $('#demo-bv-wz').find('.next').hide();
                $('#demo-bv-wz').find('.finish').show();
                $('#demo-bv-wz').find('.finish').prop('disabled', false);
            } else {
                $('#demo-bv-wz').find('.next').show();
                $('#demo-bv-wz').find('.finish');
            }
        },
        onNext: function(){
            isValid = null;
            $('#demo-bv-wz-form').bootstrapValidator('validate');


            if(isValid === false)return false;
        }
    });




    // FORM VALIDATION
    // =================================================================
    // Require Bootstrap Validator
    // http://bootstrapvalidator.com/
    // =================================================================
    //rollno,email,programme,course,sec,advisor,firstName
//lastName,password,phoneNumber,address
    var isValid;
    $('#demo-bv-wz-form').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
        rollno: {
            validators: {
                notEmpty: {
                    message: 'The rollno is required and cannot be empty'
                },
                regexp: {
                    //14csl286
                    regexp: /^([1-9]{1,2}?[1-9])+([a-zA-Z])+([1-9]{1,2})+$/i,
                    message: 'The rollno can only consist of alphabetical characters and number'
                }
            }
        },

        email: {
            validators: {
                notEmpty: {
                    message: 'The email address is required and can\'t be empty'
                },
                regexp: {
                    
                    regexp: /^[\w\+\.1-9\+a-z]*@[a-z]+([\.]?\w+)*(\.[a-z]{2,3})+$/i,
                    message: 'The input is not a valid email address'
                }
            }
        },
        firstName: {
            validators: {
                notEmpty: {
                    message: 'The first name is required and cannot be empty'
                },
                regexp: {
                    regexp: /^[a-zA-Z]+$/i,
                    message: 'first name only'
                }
            }
        },
        lastName: {
            validators: {
                notEmpty: {
                    message: 'The last name is required and cannot be empty'
                },
                regexp: {
                    regexp: /^[A-Za-z]+$/i,
                    message: 'last name only'
                }
            }
        },
        phoneNumber: {
            validators: {
                notEmpty: {
                    message: 'The phone number is required and cannot be empty'
                },
                digits:{
                    message: 'only digit'
                },
                regexp: {
                    regexp: /^\d{10}$/,
                    message: 'number should be 10 digit' 
                }
            }
        },
        password: {
            validators: {
                stringLength: {
                    min: 8,
                    max: 15,
                    message: 'The password must be more than 8 and less than 15 characters long'
                },
                notEmpty: {
                    message: 'The password is required and cannot be empty'
                }
            }
        },
        programme: {
            validators: {
                notEmpty: { 
                    message: 'select programme'
                }
            }
        },
        course: {
            validators: {
                notEmpty: {
                    message: 'select course'
                }
            }
        },
        sec: {
            validators: {
                notEmpty: {
                    message: 'select section'
                }
            }
        },
        advisor: {
            validators: {
                stringLength: {
                    min: 4,
                },
                notEmpty: {
                    message: 'advisor feild is empty'
                }
            }
        },

       
        address: {
            validators: {
                notEmpty: {
                    message: 'The address is required'
                }
            }
        }
        }
    }).on('success.field.bv', function(e, data) {
        // $(e.target)  --> The field element
        // data.bv      --> The BootstrapValidator instance
        // data.field   --> The field name
        // data.element --> The field element

        var $parent = data.element.parents('.form-group');

        // Remove the has-success class
        $parent.removeClass('has-success');


        // Hide the success icon
        //$parent.find('.form-control-feedback[data-bv-icon-for="' + data.field + '"]').hide();
    }).on('error.form.bv', function(e) {
        isValid = false;
    });



});
