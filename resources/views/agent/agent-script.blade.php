 @push('body-scripts')
     <script>
         function validateInput(event) {
             var inputValue = event.target.value.toUpperCase();
             var insuranceInputs = {
                 'A': 'insur_a',
                 'B': 'insur_b',
                 'C': 'insur_c',
                 'D': 'insur_d',
                 'E': 'insur_e'
             };

             // Check if the corresponding insurance input has value
             var correspondingInputName = insuranceInputs[inputValue];
             if (correspondingInputName) {
                 var input = document.getElementsByName(correspondingInputName)[0];
                 if (input.value.trim() === '') {
                     alert("Error: Please fill out the corresponding insurance input before proceeding.");
                     event.target.value = ''; // Clear the input value
                 }
             }
         }
     </script>
     <script type="text/javascript">
         $('.js-example-basic-single').select2({
             ajax: {
                 url: "{{ route('insurSearch') }}",
                 dataType: 'json',
                 delay: 250,
                 processResults: function(data) {
                     return {
                         results: $.map(data, function(item) {
                             return {
                                 text: item.name,
                                 id: item.id
                             }
                         })
                     };
                 },
                 cache: true
             }
         });
     </script>
 @endpush
