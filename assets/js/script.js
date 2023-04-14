document.addEventListener('DOMContentLoaded', () => {
    const previews = document.querySelectorAll('.h-preview-text');
    const previewsLimit = 160;
    previews.forEach(preview => {
        let text = preview.textContent;
        preview.textContent = text.split('').slice(0, 160).join('') + '...';
    });

    const hImage = document.querySelector('.h-image-inp');
    const hImagePreview = document.querySelector('.h-image-preview');
    if (hImage) {
        
        hImage.addEventListener('change', () => {
            const reader = new FileReader();
            reader.onload = function(e) {
                console.log('asd')
                hImagePreview.innerHTML = `<img src="${e.target.result}" alt="">`;
            }

            reader.readAsDataURL(hImage.files[0]);

        });
    }

    const textareas = document.querySelectorAll('textarea');

    textareas.forEach(textarea => {
        textarea.style.cssText = 'height:auto;';
        textarea.style.cssText = 'height:' + textarea.scrollHeight + 'px';
    });
    textareas.forEach(textarea => textarea.addEventListener('keyup', function(){
        const el = this;
        setTimeout(function() {
            el.style.cssText = 'height:auto;';
            el.style.cssText = 'height:' + el.scrollHeight + 'px';
        }, 1);
    }));

});