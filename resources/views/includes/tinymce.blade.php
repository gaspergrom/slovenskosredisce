<script>
    tinymce.init({
        selector: "textarea.content",  // change this value according to your HTML
        plugins: [
            'advlist autolink lists link charmap print preview',
            'searchreplace visualblocks',
            'insertdatetime media table contextmenu paste'
        ],
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link',
        rel_list: [
            {title: 'None', value: ''},
            {title: 'New window', value: 'noreffer noopener'},
        ]
    });
</script>