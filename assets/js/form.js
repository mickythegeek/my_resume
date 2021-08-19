

        function validateForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var name = $("#name").val();
            var email = $("#email").val();
            var phone = $("#phone").val();
            var subject = $("#subject").val();
            var message = $("#message").val();
            
            if (name == "") {
                $("#name-info").html("Required.");
                $("#name").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (email == "") {
                $("#email-info").html("Required.");
                $("#email").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!email.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#email-info").html("Invalid Email Address.");
                $("#email").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (message == "") {
                $("#userMessage-info").html("Required.");
                $("#message").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
