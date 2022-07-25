<!-- Jquery-3.5.1.Slim.Min.JS -->
<script src="assets/js/jquery-3.5.1.slim.min.js"></script>
<!-- Popper JS -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Meanmenu JS -->
<script src="assets/js/jquery.meanmenu.js"></script>
<!-- Wow JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Owl Carousel JS -->
<script src="assets/js/owl.carousel.js"></script>
<!-- Owl Magnific JS -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Nice Select JS -->
<script src="assets/js/jquery.nice-select.min.js"></script>
<!-- Parallax JS --> 
<script src="assets/js/parallax.min.js"></script>
<!-- Appear JS --> 
<script src="assets/js/jquery.appear.js"></script>
<!-- Odometer JS --> 
<script src="assets/js/odometer.min.js"></script>
<!-- Odometer JS --> 
<script src="assets/js/bootstrap-datepicker.min.js"></script>
<!-- Form Validator JS -->
<script src="assets/js/form-validator.min.js"></script>
<!-- Contact JS -->
<script src="assets/js/contact-form-script.js"></script>	
<script src="assets/js/custom.js"></script>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script> -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js" charset="utf-8"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js" charset="utf-8"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mapael/2.1.0/js/jquery.mapael.min.js" charset="utf-8"></script>               
<script type="text/javascript" src="assets/js/mexico.js" charset="utf-8"></script>
<script>
			var url = window.location.pathname;
			var filename = url.substring(url.lastIndexOf('/')+1);
			$(".menu_activo").removeClass("menu_activo");
			$('.nav-link[href="' + filename + '"]').addClass("menu_activo");
            console.log(filename);
</script>
<script>
        $(function () {
            $(".mapcontainer").mapael({
                map: {
                    name: "mexico"

                    // Set default plots and areas style
                    
                    // estados coloreados por default
                    , defaultArea: {
                        attrs: {
                            fill: "#5d5d5d" //color de estados default 
                            , stroke: "#ced8d0" // color en divisiones de estados
                        }
                        , attrsHover: {
                            fill: "#5d5d5d" //color estados al seleccionar
                        }
                        , text: {
                            attrs: {
                                fill: "#505444"
                            }
                            , attrsHover: {
                                fill: "#000"
                            }
                        }
                    }
                },

                // Listado de estados
                areas: {                    
                    "puebla": {
                        attrs: {
                            fill: "#5d5d5d" //color estados por default
                        }
                        , attrsHover: {
                            fill: "#E25224"  // color estados seleccionados
                        },
                        value: "1"
                    },
                    "veracruz": {
                        attrs: {
                            fill: "#5d5d5d"
                        }
                        , attrsHover: {
                            fill: "#E25224"
                        },
                        value: "2"
                    },
                    "morelos": {
                        attrs: {
                            fill: "#5d5d5d"
                        }
                        , attrsHover: {
                            fill: "#E25224"
                        },
                        value: "3"
                    },
                    "oaxaca": {
                        attrs: {
                            fill: "#5d5d5d"
                        }
                        , attrsHover: {
                            fill: "#E25224"
                        },
                        value: "4"
                    },
                    "tabasco": {
                        attrs: {
                            fill: "#5d5d5d"
                        }
                        , attrsHover: {
                            fill: "#E25224"
                        },
                        value: "5"
                    },
                    "hidalgo": {
                        attrs: {
                            fill: "#5d5d5d"
                        }
                        , attrsHover: {
                            fill: "#E25224"
                        },
                        value: "6"
                    },
					"tlaxcala": {
                        attrs: {
                            fill: "#5d5d5d"
                        }
                        , attrsHover: {
                            fill: "#E25224"
                        },
                        value: "7"
                    },
                    "queretaro": {
                        attrs: {
                            fill: "#5d5d5d"
                        }
                        , attrsHover: {
                            fill: "#E25224"
                        },
                        value: "8"
                    },
                    "michoacan": {
                        attrs: {
                            fill: "#5d5d5d"
                        }
                        , attrsHover: {
                            fill: "#E25224"
                        },
                        value: "9"
                    }
                }
             
            });
        });       

        $("#PUEBLA").hover(function(){
            $(this).click();
            }).click(function(){

                var updatedOptions = {'areas': {}};
                    updatedOptions.areas["puebla"] = {			
                        attrs: {
                            fill: "#E25224"
                        }
                    };
                    updatedOptions.areas["veracruz"] = {			
                        attrs: {
                            fill: "#5d5d5d"
                        }
                    };
                    updatedOptions.areas["morelos"] = {			
                        attrs: {
                            fill: "#5d5d5d"
                        }
                    };
                    updatedOptions.areas["oaxaca"] = {			
                        attrs: {
                            fill: "#5d5d5d"
                        }
                    };
                    updatedOptions.areas["tabasco"] = {			
                        attrs: {
                            fill: "#5d5d5d"
                        }
                    };
                    updatedOptions.areas["hidalgo"] = {			
                        attrs: {
                            fill: "#5d5d5d"
                        }
                    };
                    updatedOptions.areas["tlaxcala"] = {			
                        attrs: {
                            fill: "#5d5d5d"
                        }
                    };
                    updatedOptions.areas["queretaro"] = {			
                        attrs: {
                            fill: "#5d5d5d"
                        }
                    };
                    updatedOptions.areas["michoacan"] = {			
                        attrs: {
                            fill: "#5d5d5d"
                        }
                    };

                    // and delete some others ...		
			$(".mapcontainer").trigger('update', [{
				mapOptions: updatedOptions				
			}]);
            
        }); 

        $("#VERACRUZ").hover(function(){
            $(this).click();
            }).click(function(){
                
                 // Update some plots and areas attributes ...
                var updatedOptions = {'areas': {}};
                updatedOptions.areas["veracruz"] = {			
                    attrs: {
                        fill: "#E25224"
                    }
                };                
                updatedOptions.areas["puebla"] = {			
                attrs: {
                    fill: "#5d5d5d"
                    }
                };           
                updatedOptions.areas["morelos"] = {			
                    attrs: {
                        fill: "#5d5d5d"
                    }
                };
                updatedOptions.areas["oaxaca"] = {			
                    attrs: {
                        fill: "#5d5d5d"
                    }
                };
                updatedOptions.areas["tabasco"] = {			
                    attrs: {
                        fill: "#5d5d5d"
                    }
                };
                updatedOptions.areas["hidalgo"] = {			
                    attrs: {
                        fill: "#5d5d5d"
                    }
                };
                updatedOptions.areas["tlaxcala"] = {			
                    attrs: {
                        fill: "#5d5d5d"
                    }
                };
                updatedOptions.areas["queretaro"] = {			
                    attrs: {
                        fill: "#5d5d5d"
                    }
                };
                updatedOptions.areas["michoacan"] = {			
                    attrs: {
                        fill: "#5d5d5d"
                    }
                };

            // and delete some others ...		
                $(".mapcontainer").trigger('update', [{
                    mapOptions: updatedOptions				
                }]); 

        });        
       
        $("#MORELOS").hover(function(){
            $(this).click();
            }).click(function(){

                // Update some plots and areas attributes ...
            var updatedOptions = {'areas': {}};
            updatedOptions.areas["morelos"] = {			
                attrs: {
                    fill: "#E25224"
                }
            };            
             updatedOptions.areas["puebla"] = {			
			    attrs: {
				    fill: "#5d5d5d"
			    }
            };           
            updatedOptions.areas["veracruz"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["oaxaca"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["tabasco"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["hidalgo"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["tlaxcala"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["queretaro"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["michoacan"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            // and delete some others ...		
            $(".mapcontainer").trigger('update', [{
                mapOptions: updatedOptions				
            }]);        
        });

        $("#OAXACA").hover(function(){
            $(this).click();
            }).click(function(){

                // Update some plots and areas attributes ...
            var updatedOptions = {'areas': {}};
            updatedOptions.areas["oaxaca"] = {			
                attrs: {
                    fill: "#E25224"
                }
            };            
             updatedOptions.areas["puebla"] = {			
			    attrs: {
				    fill: "#5d5d5d"
			    }
            };           
            updatedOptions.areas["veracruz"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["morelos"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["tabasco"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["hidalgo"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["tlaxcala"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["queretaro"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["michoacan"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            // and delete some others ...		
            $(".mapcontainer").trigger('update', [{
                mapOptions: updatedOptions				
            }]);        
        });

        $("#TABASCO").hover(function(){
            $(this).click();
            }).click(function(){

                // Update some plots and areas attributes ...
                var updatedOptions = {'areas': {}};
                updatedOptions.areas["tabasco"] = {			
                    attrs: {
                        fill: "#E25224"
                    }
                };            
                updatedOptions.areas["puebla"] = {			
                    attrs: {
                        fill: "#5d5d5d"
                    }
                };           
                updatedOptions.areas["veracruz"] = {			
                    attrs: {
                        fill: "#5d5d5d"
                    }
                };
                updatedOptions.areas["morelos"] = {			
                    attrs: {
                        fill: "#5d5d5d"
                    }
                };
                updatedOptions.areas["oaxaca"] = {			
                    attrs: {
                        fill: "#5d5d5d"
                    }
                };
                updatedOptions.areas["hidalgo"] = {			
                    attrs: {
                        fill: "#5d5d5d"
                    }
                };
                updatedOptions.areas["tlaxcala"] = {			
                    attrs: {
                        fill: "#5d5d5d"
                    }
                };
                updatedOptions.areas["queretaro"] = {			
                    attrs: {
                        fill: "#5d5d5d"
                    }
                };
                updatedOptions.areas["michoacan"] = {			
                    attrs: {
                        fill: "#5d5d5d"
                    }
                };
                // and delete some others ...		
                $(".mapcontainer").trigger('update', [{
                    mapOptions: updatedOptions				
                }]);        
        });

        $("#HIDALGO").hover(function(){
            $(this).click();
            }).click(function(){

                // Update some plots and areas attributes ...
            var updatedOptions = {'areas': {}};
            updatedOptions.areas["hidalgo"] = {			
                attrs: {
                    fill: "#E25224"
                }
            };            
             updatedOptions.areas["puebla"] = {			
			    attrs: {
				    fill: "#5d5d5d"
			    }
            };           
            updatedOptions.areas["veracruz"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["morelos"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["oaxaca"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["tabasco"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["tlaxcala"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["queretaro"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["michoacan"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            // and delete some others ...		
            $(".mapcontainer").trigger('update', [{
                mapOptions: updatedOptions				
            }]);        
        });

        $("#TLAXCALA").hover(function(){
            $(this).click();
            }).click(function(){

                // Update some plots and areas attributes ...
            var updatedOptions = {'areas': {}};
            updatedOptions.areas["tlaxcala"] = {			
                attrs: {
                    fill: "#E25224"
                }
            };            
             updatedOptions.areas["puebla"] = {			
			    attrs: {
				    fill: "#5d5d5d"
			    }
            };           
            updatedOptions.areas["veracruz"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["morelos"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["oaxaca"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["tabasco"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["hidalgo"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["queretaro"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["michoacan"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            // and delete some others ...		
            $(".mapcontainer").trigger('update', [{
                mapOptions: updatedOptions				
            }]);        
        });

        $("#QUERETARO").hover(function(){
            $(this).click();
            }).click(function(){

                // Update some plots and areas attributes ...
            var updatedOptions = {'areas': {}};
            updatedOptions.areas["queretaro"] = {			
                attrs: {
                    fill: "#E25224"
                }
            };            
             updatedOptions.areas["puebla"] = {			
			    attrs: {
				    fill: "#5d5d5d"
			    }
            };           
            updatedOptions.areas["veracruz"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["morelos"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["oaxaca"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["tabasco"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["hidalgo"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["tlaxcala"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["michoacan"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            // and delete some others ...		
            $(".mapcontainer").trigger('update', [{
                mapOptions: updatedOptions				
            }]);        
        });

        $("#MICHOACAN").hover(function(){
            $(this).click();
            }).click(function(){

                // Update some plots and areas attributes ...
            var updatedOptions = {'areas': {}};
            updatedOptions.areas["michoacan"] = {			
                attrs: {
                    fill: "#E25224"
                }
            };            
             updatedOptions.areas["puebla"] = {			
			    attrs: {
				    fill: "#5d5d5d"
			    }
            };           
            updatedOptions.areas["veracruz"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["morelos"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["oaxaca"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["tabasco"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["hidalgo"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["tlaxcala"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            updatedOptions.areas["queretaro"] = {			
                attrs: {
                    fill: "#5d5d5d"
                }
            };
            // and delete some others ...		
            $(".mapcontainer").trigger('update', [{
                mapOptions: updatedOptions				
            }]);        
        });
    
</script>
