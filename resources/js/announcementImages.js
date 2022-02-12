
let drophere = document.querySelector('#drophere');
let meta = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
let inputSecret = document.querySelector('input[name="secret"]').getAttribute('value');

function newAnnouncement() {

    if (drophere.length > 0) {
        
        let csrfToken = meta;
        let secret = inputSecret;

        let myDropzone = new Dropzone('#drophere', {
            url: '/announcement/images/upload',

            params: {

                token: csrfToken,
                secret: secret,
            }
        })

    }
}
newAnnouncement();
