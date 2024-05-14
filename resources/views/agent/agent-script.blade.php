 @push('body-scripts')
@if ($r==1)
<script type="text/javascript">

    var inputFields = document.querySelectorAll('input, select');
    inputFields.forEach(function(input) {
        input.disabled = true;
    });
    var btn = document.getElementById('btn');
if (btn) {
    btn.style.display = 'none';
}
</script>
@endif


     <script type="text/javascript">


    // Get all checkboxes
    var checkboxes = document.querySelectorAll('.abcd');

    // Add event listener to each checkbox
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            validateCheckboxes();
        });
    });

    // Add event listener to the button
    document.getElementById('btn').addEventListener('click', function(e) {
        validateCheckboxes();
        var validationStatus = document.getElementById('checkboxValidation').value;

        // Check if at least one checkbox is checked
        if (validationStatus === 'false') {
            e.preventDefault();
            const swalWithBootstrapButtons = Swal.mixin({
                         customClass: {
                             confirmButton: "btn btn-danger"
                         },
                         buttonsStyling: false
                     });
                     swalWithBootstrapButtons.fire({
                         title: 'Error!',
                         text: 'Error: Please Check at least one type of insurance',
                         icon: 'error',
                         confirmButtonText: 'OK'
                     });

        }
    });

    function validateCheckboxes() {
        var atLeastOneChecked = false;

        // Check if at least one checkbox is checked
        checkboxes.forEach(function(checkbox) {
            if (checkbox.checked) {
                atLeastOneChecked = true;
            }
        });

        // Update the hidden input with the validation status
        document.getElementById('checkboxValidation').value = atLeastOneChecked ? 'true' : 'false';
    }

    $('#mat-input-20').keyup(function() {
        this.value = this.value.toLocaleUpperCase();
    });

function validateInput(event) {
    var inputValue = event.target.value.toUpperCase();
    var insuranceInputs = {
        'A': 'insurA',
        'B': 'insurB',
        'C': 'insurC',
        'D': 'insurD',
        'E': 'insurE'
    };

    // Check if the corresponding insurance input has value
    var correspondingInputName = insuranceInputs[inputValue];
    console.log(correspondingInputName);
    if (correspondingInputName) {
        var input = document.getElementById(correspondingInputName);
        console.log(input.value);
        if (input.value.trim() === '') {
            const swalWithBootstrapButtons = Swal.mixin({
                         customClass: {
                             confirmButton: "btn btn-danger"
                         },
                         buttonsStyling: false
                     });
                     swalWithBootstrapButtons.fire({
                         title: 'Error!',
                         text: 'Error: Please fill out the corresponding insurance input before proceeding.',
                         icon: 'error',
                         confirmButtonText: 'OK'
                     });
                     event.target.value = ''; // Clear the input value
        }
    }
}



        //  function validateInput(event) {
        //      var inputValue = event.target.value.toUpperCase();
        //      var insuranceInputs = {
        //          'A': 'insurA',
        //          'B': 'insurB',
        //          'C': 'insurC',
        //          'D': 'insurD',
        //          'E': 'insurE'
        //      };

        //      // Check if the corresponding insurance input has value
        //      var correspondingInputName = insuranceInputs[inputValue];
        //      console.log(correspondingInputName);

        //      if (correspondingInputName) {
        //          var input = document.getElementById(correspondingInputName);
        //          console.log(input.length);
        //          if ( input.length === 0 ) {

        //              const swalWithBootstrapButtons = Swal.mixin({
        //                  customClass: {
        //                      confirmButton: "btn btn-danger"
        //                  },
        //                  buttonsStyling: false
        //              });
        //              swalWithBootstrapButtons.fire({
        //                  title: 'Error!',
        //                  text: 'Error: Please fill out the corresponding insurance input before proceeding.',
        //                  icon: 'error',
        //                  confirmButtonText: 'OK'
        //              });
        //              event.target.value = ''; // Clear the input value
        //          }
        //      }
        //  }



         $(document).ready(function() {
             var path = "{{ route('insurSearch') }}";

            //  $('#insurA').select2({
            //      ajax: {
            //          url: path,
            //          dataType: 'json',
            //          delay: 250,
            //          processResults: function(data) {
            //              return {
            //                  results: $.map(data, function(item) {
            //                      return {
            //                          text: item.name,
            //                          id: item.id,
            //                          naic: item.naic_number,
            //                          best_rate: item.best_rating_number,
            //                      }
            //                  })
            //              };
            //          },
            //          cache: true
            //      }
            //  }).on('select2:select', function(event) {
            //      // This is how I got ahold of the data
            //      var contact = event.params.data;
            //      $('#naic_a').val(contact.naic);
            //      $('#br_a').val(contact.best_rate);
            //      // contact.suggestions ...
            //      // contact.organization_id ...
            //  });

            $('#insurA').keyup(function(){
                var query = $(this).val();
                if(query != '')
                {
                $.ajax({
                  url: path,
                  method:"GET",
                  data:{query:query},
                  success:function(data){
                    $('#insurerAList').fadeIn();
                    $('#insurerAList').html(data);
                  }
                });
                }
            });

            $("#insurerAList").on("click", "li",function(){
                $('#insurA').val($(this).text());
                $('#naic_a').val($(this).data("naic"));
                $('#br_a').val($(this).data("brn"));
                $('#insurance_provider_id_A').val($(this).data("id"));
                $('#insurerAList').fadeOut();
            });

            $('#insurB').keyup(function(){
                var query = $(this).val();
                if(query != '')
                {
                $.ajax({
                  url: path,
                  method:"GET",
                  data:{query:query},
                  success:function(data){
                    $('#insurerBList').fadeIn();
                    $('#insurerBList').html(data);
                  }
                });
                }
            });

            $('#insurerBList').on("click", "li",function(){
                $('#insurB').val($(this).text());
                $('#naic_b').val($(this).data("naic"));
                $('#br_b').val($(this).data("brn"));
                $('#insurance_provider_id_B').val($(this).data("id"));
                $('#insurerBList').fadeOut();
            });

            $('#insurC').keyup(function(){
                var query = $(this).val();
                if(query != '')
                {
                $.ajax({
                  url: path,
                  method:"GET",
                  data:{query:query},
                  success:function(data){
                    $('#insurerCList').fadeIn();
                    $('#insurerCList').html(data);
                  }
                });
                }
            });

            $('#insurerCList').on("click", "li",function(){
                $('#insurC').val($(this).text());
                $('#naic_c').val($(this).data("naic"));
                $('#br_c').val($(this).data("brn"));
                $('#insurance_provider_id_C').val($(this).data("id"));
                $('#insurerCList').fadeOut();
            });

            $('#insurD').keyup(function(){
                var query = $(this).val();
                if(query != '')
                {
                $.ajax({
                  url: path,
                  method:"GET",
                  data:{query:query},
                  success:function(data){
                    $('#insurerDList').fadeIn();
                    $('#insurerDList').html(data);
                  }
                });
                }
            });

            $('#insurerDList').on("click", "li",function(){
                $('#insurD').val($(this).text());
                $('#naic_d').val($(this).data("naic"));
                $('#br_d').val($(this).data("brn"));
                $('#insurance_provider_id_D').val($(this).data("id"));
                $('#insurerDList').fadeOut();
            });

            $('#insurE').keyup(function(){
                var query = $(this).val();
                if(query != '')
                {
                $.ajax({
                  url: path,
                  method:"GET",
                  data:{query:query},
                  success:function(data){
                    $('#insurerEList').fadeIn();
                    $('#insurerEList').html(data);
                  }
                });
                }
            });

            $('#insurerEList').on("click", "li",function(){
                $('#insurE').val($(this).text());
                $('#naic_e').val($(this).data("naic"));
                $('#br_e').val($(this).data("brn"));
                $('#insurance_provider_id_E').val($(this).data("id"));
                $('#insurerEList').fadeOut();
            });

            //  $('#insurB').select2({
            //      ajax: {
            //          url: path,
            //          dataType: 'json',
            //          delay: 250,
            //          processResults: function(data) {
            //              return {
            //                  results: $.map(data, function(item) {
            //                      return {
            //                          text: item.name,
            //                          id: item.id,
            //                          naic: item.naic_number,
            //                          best_rate: item.best_rating_number,
            //                      }
            //                  })
            //              };
            //          },
            //          cache: true
            //      }
            //  }).on('select2:select', function(event) {
            //      // This is how I got ahold of the data
            //      var contact = event.params.data;
            //      $('#naic_b').val(contact.naic);
            //      $('#br_b').val(contact.best_rate);
            //      // contact.suggestions ...
            //      // contact.organization_id ...
            //  });

            //  $('#insurC').select2({
            //      ajax: {
            //          url: path,
            //          dataType: 'json',
            //          delay: 250,
            //          processResults: function(data) {
            //              return {
            //                  results: $.map(data, function(item) {
            //                      return {
            //                          text: item.name,
            //                          id: item.id,
            //                          naic: item.naic_number,
            //                          best_rate: item.best_rating_number,
            //                      }
            //                  })
            //              };
            //          },
            //          cache: true
            //      }
            //  }).on('select2:select', function(event) {
            //      // This is how I got ahold of the data
            //      var contact = event.params.data;
            //      $('#naic_c').val(contact.naic);
            //      $('#br_c').val(contact.best_rate);
            //      // contact.suggestions ...
            //      // contact.organization_id ...
            //  });

            //  $('#insurD').select2({
            //      ajax: {
            //          url: path,
            //          dataType: 'json',
            //          delay: 250,
            //          processResults: function(data) {
            //              return {
            //                  results: $.map(data, function(item) {
            //                      return {
            //                          text: item.name,
            //                          id: item.id,
            //                          naic: item.naic_number,
            //                          best_rate: item.best_rating_number,
            //                      }
            //                  })
            //              };
            //          },
            //          cache: true
            //      }
            //  }).on('select2:select', function(event) {
            //      // This is how I got ahold of the data
            //      var contact = event.params.data;
            //      $('#naic_d').val(contact.naic);
            //      $('#br_d').val(contact.best_rate);
            //      // contact.suggestions ...
            //      // contact.organization_id ...
            //  });

            //  $('#insurE').select2({
            //      ajax: {
            //          url: path,
            //          dataType: 'json',
            //          delay: 250,
            //          processResults: function(data) {
            //              return {
            //                  results: $.map(data, function(item) {
            //                      return {
            //                          text: item.name,
            //                          id: item.id,
            //                          naic: item.naic_number,
            //                          best_rate: item.best_rating_number,
            //                      }
            //                  })
            //              };
            //          },
            //          cache: true
            //      }
            //  }).on('select2:select', function(event) {
            //      // This is how I got ahold of the data
            //      var contact = event.params.data;
            //      $('#naic_e').val(contact.naic);
            //      $('#br_e').val(contact.best_rate);
            //      // contact.suggestions ...
            //      // contact.organization_id ...
            //  });
         });
     </script>
 @endpush
