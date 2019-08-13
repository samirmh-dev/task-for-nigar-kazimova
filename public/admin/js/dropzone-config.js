var total_photos_counter = 0;
Dropzone.options.myAwesomDropzone = {
    autoProcessQueue: false,
    uploadMultiple: true,
    parallelUploads: 2,
    maxFilesize: 16,
    previewTemplate: document.querySelector('#preview').innerHTML,
    addRemoveLinks: true,
    dictRemoveFile: 'Remove file',
    dictFileTooBig: 'Image is larger than 16MB',
    timeout: 10000,

    init: function () {
        this.on("removedfile", function (file) {
            $.post({
                url: '/images-delete',
                data: {id: file.name, _token: $('[name="_token"]').val()},
                dataType: 'json',
                success: function (data) {
                    total_photos_counter--;
                    $("#counter").text("# " + total_photos_counter);
                }
            });
        });

        const myDropzone = this;

        const form = document.querySelector('#my-awesome-dropzone');
        let processed = false;

        form.addEventListener('submit', e => {
            if (!processed) {
                e.preventDefault();
                myDropzone.processQueue();
            }
        });

        this.on("complete", function (file) {
            if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
                processed = true;
                form.submit();
            }
        });
    },
    success: function (file, done) {
        total_photos_counter++;
        $("#counter").text("# " + total_photos_counter);
    }
};

