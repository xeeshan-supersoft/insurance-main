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
    document.getElementById('btnsub').addEventListener('click', function(e) {
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

        var anySelected = false;
        $('.selecter').each(function(){
          var selected = $(this).val();
            if(selected){
              anySelected = true;
          }
        });
        if(anySelected == false) {
          e.preventDefault();
          const swalWithBootstrapButtons = Swal.mixin({
                         customClass: {
                             confirmButton: "btn btn-danger"
                         },
                         buttonsStyling: false
                     });
                     swalWithBootstrapButtons.fire({
                         title: 'Error!',
                         text: 'Error: Please select atleast one Insurance Provider.',
                         icon: 'error',
                         confirmButtonText: 'OK'
                     });
          return false;
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

    $('.toupper').keyup(function() {
        this.value = this.value.toLocaleUpperCase();
    });

function validateInput(event) {
    var inputValue = event.target.value.toUpperCase();
    var insuranceInputs = {
        'A': 'insurA',
        'B': 'insurB',
        'C': 'insurC',
        'D': 'insurD',
        'E': 'insurE',
         'F': 'insurF'
    };

    // Check if the corresponding insurance input has value
    var correspondingInputName = insuranceInputs[inputValue];
    if (correspondingInputName !== undefined) {
        var input = document.getElementById(correspondingInputName);
        //console.log(correspondingInputName);
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
    } else {
      const swalWithBootstrapButtons = Swal.mixin({
                         customClass: {
                             confirmButton: "btn btn-danger"
                         },
                         buttonsStyling: false
                     });
                     swalWithBootstrapButtons.fire({
                         title: 'Error!',
                         text: 'Error: Please Select the Insurance from Range A, B, C, D, E,F',
                         icon: 'error',
                         confirmButtonText: 'OK'
                     });
                     event.target.value = '';
    }
}

  $(document).ready(function() {
      var path = "{{ route('insurSearch') }}";

    $('#insurA').on('change',function(){
        $('#naic_a').val($(this).find(':selected').data('naic'));

        $('#br_a').val($(this).find(':selected').data("brn"));
        $('#insurance_provider_id_A').val(this.value);
    });

    $('#insurB').on('change',function(){
        $('#naic_b').val($(this).find(':selected').data('naic'));

        $('#br_b').val($(this).find(':selected').data("brn"));
        $('#insurance_provider_id_B').val(this.value);
    });

    $('#insurC').on('change',function(){
        $('#naic_c').val($(this).find(':selected').data('naic'));

        $('#br_c').val($(this).find(':selected').data("brn"));
        $('#insurance_provider_id_C').val(this.value);
    });

    $('#insurD').on('change',function(){
        $('#naic_d').val($(this).find(':selected').data('naic'));

        $('#br_d').val($(this).find(':selected').data("brn"));
        $('#insurance_provider_id_D').val(this.value);
    });

    $('#insurE').on('change',function(){
        $('#naic_e').val($(this).find(':selected').data('naic'));

        $('#br_e').val($(this).find(':selected').data("brn"));
        $('#insurance_provider_id_E').val(this.value);
    });

    $('#insurF').on('change',function(){
        $('#naic_f').val($(this).find(':selected').data('naic'));

        $('#br_f').val($(this).find(':selected').data("brn"));
        $('#insurance_provider_id_F').val(this.value);
    });
  });

 $('input[type="number"]').each((i,ele)=>{
        let clone=$(ele).clone(false)
        clone.attr('type','text')
        let ele1=$(ele)
        clone.val(Number(ele1.val()).toLocaleString('en'))
        $(ele).after(clone)
        $(ele).hide()
        clone.mouseenter(()=>{
            ele1.show()
            clone.hide()
        })
        setInterval(()=>{
            let newv=Number(ele1.val()).toLocaleString('en')
            if(clone.val()!=newv){
                clone.val(newv)
            }
        },10)

        $(ele).mouseleave((event)=>{
            if ($(ele).is(':focus')) {
                event.preventDefault();
            } else {
                $(clone).show()
                $(ele1).hide()
            }
        })
        $(ele).focusout(()=>{
            $(clone).show()
            $(ele1).hide()
        })
    })
</script>
 @endpush
