(function($){

    function addLayoutImages() {
        $('.acf-fc-popup ul li').each(function(){

            var li = $(this);
            var link = li.find('a');
            var layoutName = link.attr('data-layout');

            if(!layoutName) return;

            var imageUrl = acfPreview.themeUrl + '/acf-layout-previews/' + layoutName + '.png';

            // Prevent duplicate
            if (li.find('img').length) return;

            // Set li height auto
            li.css({
                height: 'auto',
                display: 'block'
            });

            link.css({
                boxSizing: 'border-box',
            });

            var img = $('<img>', {
                src: imageUrl,
                css: {
                    display: 'block',
                    maxWidth: '140px',
                    marginTop: '6px',
                    borderRadius: '6px',
                    border: '1px solid #ddd'
                }
            });

            link.append(img);
        });
    }

    // When popup opens
    $(document).on('click', '.acf-button[data-name="add-layout"]', function(){
        setTimeout(addLayoutImages, 50);
    });

    /* =========================
       FIELD GROUP EDITOR
    ========================== */
    function addLayoutImagesFieldGroup() {

        $('.acf-field-setting-fc_layout').each(function(){

            var layout = $(this);
            var layoutName = layout.attr('data-layout-name');

            if(!layoutName) return;

            if(layout.find('.layout-preview-img').length) return;

            var imageUrl = acfPreview.themeUrl + '/acf-layout-previews/' + layoutName + '.png';

            var img = $('<img>', {
                src: imageUrl,
                class: 'layout-preview-img'
            });

            layout.append(img);
        });
    }

    // run on load
    $(document).ready(function(){
        addLayoutImagesFieldGroup();
    });

    $(document).on('acf/setup_fields acf/append', function(){
        addLayoutImagesFieldGroup();
    });

})(jQuery);