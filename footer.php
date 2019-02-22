</div>

<?php get_template_part('/template_parts/navigation/navigation-bottom'); ?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>

<script>
    (function($) {

        // create references to the 3 dropdown fields for later use.

        var $makes_dd = $('[name="makes"]');
        var $models_dd = $('[name="models"]');
        var $years_dd = $('[name="years"]');


        // run the populate_fields function, and additionally run it every time a value changes

        populate_fields();
        $('select').change(function() {
            populate_fields();
        });

        function populate_fields() {

            var data = {

                // action needs to match the action hook part after wp_ajax_nopriv_ and wp_ajax_ in the server side script.

                'action' : 'cf7_populate_values', 

                // pass all the currently selected values to the server side script.

                'make' : $makes_dd.val(),
                'model' : $models_dd.val(),
                'year' : $years_dd.val()
            };

            // call the server side script, and on completion, update all dropdown lists with the received values.

            $.post('<?php echo admin_url( 'admin-ajax.php' ) ?>', data, function(response) {
                all_values = response;

                $makes_dd.html('').append($('<option>').text(' -- Choose Brand -- '));
                $models_dd.html('').append($('<option>').text(' -- Choose Country  -- '));
                $years_dd.html('').append($('<option>').text(' -- Choose City -- '));

                $.each(all_values.makes, function() {
                    $option = $("<option>").text(this).val(this);
                    if (all_values.current_make == this) {
                        $option.attr('selected','selected');
                    }
                    $makes_dd.append($option);
                });
                $.each(all_values.models, function() {
                    $option = $("<option>").text(this).val(this);
                    if (all_values.current_model == this) {
                        $option.attr('selected','selected');
                    }
                    $models_dd.append($option);
                });
                $.each(all_values.years, function() {
                    $option = $("<option>").text(this).val(this);
                    if (all_values.current_year == this) {
                        $option.attr('selected','selected');
                    }
                    $years_dd.append($option);
                });
            },'json');
        }

    })( jQuery );
</script>

<?php wp_footer(); ?>
</body>
</html>