@extends('voyager::master')

@section('content')
    <div class="container-fluid">
        <h1>Add Notification</h1>

        <form action="{{ route('voyager.notifications.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" class="form-control" required style="display: none;"></textarea>
            </div>
            <input type="hidden" name="message" id="hidden_message">

            <button type="submit" class="btn btn-primary">Save Notification</button>
        </form>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#message'))
            .then(editor => {
                const hiddenMessage = document.getElementById('hidden_message');

                // Cập nhật hidden input field mỗi khi nội dung CKEditor thay đổi
                editor.model.document.on('change:data', () => {
                    hiddenMessage.value = editor.getData();
                });
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection