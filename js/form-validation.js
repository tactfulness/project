
$(document).ready(function() {
	var faIcon = {
		valid: 'fa fa-check-circle fa-lg text-success',
		invalid: 'fa fa-times-circle fa-lg',
		validating: 'fa fa-refresh'
	}

	// FORM VALIDATION ON TABS
	////rollNo,firstName,txt_email,lastName,password,
	//phoneNo,rePassword,address,programme,txt_sec,course,advisor
	$('#reg-validate').formValidation({
		feedbackIcons: faIcon,
		fields: {
			rollNo: {
                validators: {
                    notEmpty: {
                        message: 'The rollno is required'
                    },
                    stringLength: {
                        max: 6,
                        message: 'require 6 letter'
                    },
                    regexp: {
                        regexp: /^[1-9{2}a-zA-Z1-9{2}]+$/,
                        message: 'The rollno can only consist of alphabetical, number  '
                    }
                }
            },
		firstName: {
			validators: {
				notEmpty: {
                        message: ' First Name required'
                    },
                  
                    regexp: {
                        regexp: /^[a-zA-Z]+$/,
                        message: 'The firstname can only consist of alphabetical  '
                    }
			}
		},
		lastName: {
			validators: {
				 notEmpty: {
                        message: ' Lastname required'
                    },
                    stringLength: {
                    	min: 1
                        max: 30,
                        message: 'require 6minimum 1 and maximum 30 letter'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z]+$/,
                        message: 'The Lastname can only consist of alphabetical  '
                    }
			}
		},
		txt_email: {
			validators: {
                    notEmpty: {
                        message: 'email required'
                    },
                    emailAddress: {
                        message: 'email is not valid address'
                    }
                }
		},
		password: {
			validators: {
				notEmpty: {
					message: ' password  required   '
				},
				identical: {
					field: 'rePassword',
					message: 'The password and its confirm are not the same'
				}
			}
		},
		rePassword: {
			validators: {
				notEmpty: {
					message: ' confirm password  required  '
				},
				identical: {
					field: 'password',
					message: 'The password and its confirm are not the same'
				}
			}
		},
		phoneNo: {
			validators: {
				notEmpty: {
					message: ' phone number required    '
				},
				digits: {
					message: 'phone number contains character'
				}
			}
		},
		address: {
			validators: {
				notEmpty:{
					message: 'address is required'
				},
			stringLength: {
				min: 15,
				max: 100,
				message : 'address less tha 15 letters'
			}
			}
		},

		programme: {
			validators: {
				notEmpty: {
					message: ' select your prohramme'
				}
			}
		},
		txt_sec: {
			validators: {
				notEmpty: {
					message: ' select your prohramme'
				}
			}
		},
		
		course: {
			validators: {
				notEmpty: {
					message: ' select your prohramme'
				}
			}
		},
		advisor: {
			validators: {
				notEmpty: {
					message: ' select your prohramme'
				}
			}
		}
		}
	});
	});


	