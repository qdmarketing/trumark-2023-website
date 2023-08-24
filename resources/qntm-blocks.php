<?php

/****************************
 GUTENBERG ACF CUSTOM BLOCKS
 ****************************/

add_action('acf/init', 'acf_gutenberg_block_init');

function acf_gutenberg_block_init()
{
    if (function_exists('acf_register_block')) {

        // Ok start registering blocks in here...

        $qntm_icon = '<svg xmlns="http://www.w3.org/2000/svg"  width="800" height="800" viewBox="0 0 800 800" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"> <g id="surface1"> <path style=" stroke:none;fill-rule:nonzero;fill:rgb(11.372549%,11.372549%,10.588235%);fill-opacity:1;" d="M 800 0 L 800 800 L 0 800 L 0 0 Z M 294.464844 201.347656 C 306.824219 213.699219 313.628906 230.136719 313.628906 247.617188 C 313.628906 256.925781 311.738281 265.878906 308.003906 274.246094 L 306.554688 277.507812 L 353.324219 324.277344 L 356.824219 318.945312 C 370.765625 297.753906 378.136719 273.09375 378.136719 247.613281 C 378.136719 212.902344 364.617188 180.273438 340.074219 155.726562 C 315.53125 131.179688 282.898438 117.664062 248.1875 117.664062 C 247.238281 117.664062 246.296875 117.75 245.347656 117.769531 C 220.886719 118.296875 197.25 125.550781 176.847656 138.972656 C 167.742188 144.972656 159.421875 152.082031 152.078125 160.140625 C 130.273438 184.050781 118.199219 215.253906 118.230469 247.613281 C 118.230469 268.785156 123.433594 289.789062 133.28125 308.378906 C 142.890625 326.453125 156.601562 342.023438 173.3125 353.84375 C 195.289062 369.367188 221.179688 377.574219 248.183594 377.574219 L 377.214844 377.574219 L 335.832031 336.203125 L 314.226562 314.585938 L 312.683594 313.054688 L 248.703125 313.054688 L 247.539062 313.066406 L 247.367188 313.054688 C 230.195312 312.851562 214.054688 306.046875 201.90625 293.894531 C 189.539062 281.53125 182.738281 265.097656 182.738281 247.613281 C 182.738281 232.113281 188.230469 217.09375 198.226562 205.335938 C 199.398438 203.957031 200.625 202.625 201.90625 201.347656 C 207.566406 195.660156 214.230469 191.066406 221.5625 187.796875 C 229.195312 184.394531 237.335938 182.601562 245.773438 182.296875 C 246.578125 182.269531 247.375 182.171875 248.183594 182.171875 C 265.664062 182.171875 282.101562 188.980469 294.464844 201.347656 Z M 118.230469 428.195312 L 118.230469 492.542969 L 215.90625 492.542969 L 215.90625 523.804688 L 280.265625 588.152344 L 280.265625 492.542969 L 378.136719 492.542969 L 378.136719 428.195312 Z M 215.90625 553.226562 L 215.90625 688.097656 L 280.265625 688.097656 L 280.265625 617.585938 Z M 433.1875 228.164062 L 433.1875 377.574219 L 500.28125 377.574219 L 500.28125 292.515625 Z M 500.28125 263.113281 L 500.28125 263.0625 L 543.125 304.210938 L 616.96875 375.054688 L 619.601562 377.574219 L 682.851562 377.574219 L 682.851562 110.316406 L 671.710938 121.003906 L 617.351562 173.15625 L 615.761719 174.671875 L 615.761719 282.683594 L 607.351562 274.625 L 445.324219 119.1875 L 443.730469 117.664062 L 433.191406 117.664062 L 433.191406 198.753906 Z M 433.054688 428.199219 L 422.949219 428.199219 L 422.949219 509.285156 L 487.304688 573.640625 L 487.304688 573.59375 L 552.902344 639.269531 L 618.496094 573.59375 L 618.496094 688.097656 L 682.851562 688.097656 L 682.851562 428.195312 L 672.738281 428.195312 L 552.902344 548.039062 Z M 422.949219 538.695312 L 422.949219 688.097656 L 487.304688 688.097656 L 487.304688 603.046875 Z M 422.949219 538.695312 "/> <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 214.792969 688.21875 L 280.546875 688.21875 L 280.546875 618.316406 L 214.792969 554.519531 Z M 214.792969 688.21875 "/> <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 118.355469 491.761719 L 215.558594 491.761719 L 215.558594 523.027344 L 279.59375 587.398438 L 279.59375 491.761719 L 376.984375 491.761719 L 376.984375 427.398438 L 118.355469 427.398438 Z M 118.355469 491.761719 "/> <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 423.015625 427.398438 L 423.015625 508.085938 L 487.054688 572.132812 L 487.054688 572.078125 L 552.328125 637.429688 L 617.601562 572.078125 L 617.601562 686.027344 L 681.644531 686.027344 L 681.644531 427.398438 L 671.582031 427.398438 L 552.328125 546.652344 L 433.070312 427.398438 Z M 423.015625 427.398438 "/> <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 420.820312 688.21875 L 486.574219 688.21875 L 486.574219 602.125 L 420.820312 536.984375 Z M 420.820312 688.21875 "/> <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 498.339844 264.613281 L 540.839844 305.78125 L 614.097656 376.660156 L 616.703125 379.179688 L 679.453125 379.179688 L 679.453125 111.78125 L 668.398438 122.472656 L 614.472656 174.652344 L 612.894531 176.175781 L 612.894531 284.238281 L 604.558594 276.171875 L 443.816406 120.660156 L 442.234375 119.140625 L 431.78125 119.140625 L 431.78125 200.269531 L 498.339844 264.65625 Z M 498.339844 264.613281 "/> <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 431.78125 228.917969 L 431.78125 379.179688 L 499.726562 379.179688 L 499.726562 293.085938 L 431.78125 227.945312 Z M 431.78125 228.917969 "/> <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 305.753906 277.414062 L 349.320312 320.984375 L 352.292969 323.957031 L 355.777344 318.652344 C 369.652344 297.5625 376.984375 273.027344 376.984375 247.667969 C 376.984375 213.125 363.539062 180.65625 339.113281 156.230469 C 314.6875 131.804688 282.214844 118.355469 247.679688 118.355469 C 246.730469 118.355469 245.792969 118.433594 244.851562 118.457031 C 220.503906 118.980469 196.984375 126.203125 176.6875 139.558594 C 167.625 145.527344 159.347656 152.601562 152.042969 160.621094 C 130.339844 184.417969 118.324219 215.46875 118.355469 247.671875 C 118.355469 268.738281 123.539062 289.640625 133.335938 308.136719 C 142.894531 326.125 156.539062 341.621094 173.171875 353.378906 C 195.035156 368.828125 220.804688 376.984375 247.679688 376.984375 L 376.066406 376.984375 L 334.894531 335.824219 L 313.386719 314.308594 L 311.851562 312.789062 L 248.191406 312.789062 L 247.03125 312.800781 L 246.859375 312.789062 C 229.773438 312.585938 213.707031 305.808594 201.621094 293.71875 C 189.320312 281.414062 182.550781 265.066406 182.550781 247.667969 C 182.550781 232.246094 188.019531 217.296875 197.964844 205.597656 C 199.117188 204.234375 200.351562 202.902344 201.621094 201.621094 C 207.253906 195.964844 213.886719 191.394531 221.175781 188.140625 C 228.777344 184.757812 236.882812 182.972656 245.269531 182.667969 C 246.074219 182.640625 246.863281 182.546875 247.679688 182.546875 C 265.070312 182.546875 281.421875 189.316406 293.722656 201.621094 C 306.023438 213.921875 312.792969 230.273438 312.792969 247.667969 C 312.792969 256.933594 310.914062 265.84375 307.199219 274.167969 Z M 305.753906 277.414062 "/> </g> </svg>';
        $icon_columns3 = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><defs><style>.fa-secondary{opacity:.4}</style></defs><path class="fa-primary" d="M576 32C611.3 32 640 60.65 640 96V416C640 451.3 611.3 480 576 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H576zM576 96H64V416H576V96z"/><path class="fa-secondary" d="M192 96H256V416H192V96zM384 96H448V416H384V96z"/></svg>';
        $icon_rectangle_wide = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M576 64C611.3 64 640 92.65 640 128V384C640 419.3 611.3 448 576 448H64C28.65 448 0 419.3 0 384V128C0 92.65 28.65 64 64 64H576zM576 112H64C55.16 112 48 119.2 48 128V384C48 392.8 55.16 400 64 400H576C584.8 400 592 392.8 592 384V128C592 119.2 584.8 112 576 112z"/></svg>';
        $icon_grid_horz = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 168C0 145.9 17.91 128 40 128H88C110.1 128 128 145.9 128 168V216C128 238.1 110.1 256 88 256H40C17.91 256 0 238.1 0 216V168zM16 168V216C16 229.3 26.75 240 40 240H88C101.3 240 112 229.3 112 216V168C112 154.7 101.3 144 88 144H40C26.75 144 16 154.7 16 168zM0 328C0 305.9 17.91 288 40 288H88C110.1 288 128 305.9 128 328V376C128 398.1 110.1 416 88 416H40C17.91 416 0 398.1 0 376V328zM16 328V376C16 389.3 26.75 400 40 400H88C101.3 400 112 389.3 112 376V328C112 314.7 101.3 304 88 304H40C26.75 304 16 314.7 16 328zM248 128C270.1 128 288 145.9 288 168V216C288 238.1 270.1 256 248 256H200C177.9 256 160 238.1 160 216V168C160 145.9 177.9 128 200 128H248zM248 144H200C186.7 144 176 154.7 176 168V216C176 229.3 186.7 240 200 240H248C261.3 240 272 229.3 272 216V168C272 154.7 261.3 144 248 144zM160 328C160 305.9 177.9 288 200 288H248C270.1 288 288 305.9 288 328V376C288 398.1 270.1 416 248 416H200C177.9 416 160 398.1 160 376V328zM176 328V376C176 389.3 186.7 400 200 400H248C261.3 400 272 389.3 272 376V328C272 314.7 261.3 304 248 304H200C186.7 304 176 314.7 176 328zM408 128C430.1 128 448 145.9 448 168V216C448 238.1 430.1 256 408 256H360C337.9 256 320 238.1 320 216V168C320 145.9 337.9 128 360 128H408zM408 144H360C346.7 144 336 154.7 336 168V216C336 229.3 346.7 240 360 240H408C421.3 240 432 229.3 432 216V168C432 154.7 421.3 144 408 144zM320 328C320 305.9 337.9 288 360 288H408C430.1 288 448 305.9 448 328V376C448 398.1 430.1 416 408 416H360C337.9 416 320 398.1 320 376V328zM336 328V376C336 389.3 346.7 400 360 400H408C421.3 400 432 389.3 432 376V328C432 314.7 421.3 304 408 304H360C346.7 304 336 314.7 336 328z"/></svg>';
        $icon_square_chev = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><defs><style>.fa-secondary{opacity:.4}</style></defs><path class="fa-primary" d="M358.6 230.6l-112 112C240.4 348.9 232.2 352 224 352s-16.38-3.125-22.62-9.375l-112-112c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L224 274.8l89.38-89.38c12.5-12.5 32.75-12.5 45.25 0S371.1 218.1 358.6 230.6z"/><path class="fa-secondary" d="M384 32H64C28.66 32 0 60.65 0 96v320c0 35.34 28.66 64 64 64h320c35.34 0 64-28.66 64-64V96C448 60.65 419.3 32 384 32zM358.6 230.6l-112 112C240.4 348.9 232.2 352 224 352s-16.38-3.125-22.62-9.375l-112-112c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L224 274.8l89.38-89.38c12.5-12.5 32.75-12.5 45.25 0S371.1 218.1 358.6 230.6z"/></svg>';
        $icon_browsers = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><defs><style>.fa-secondary{opacity:.4}</style></defs><path class="fa-primary" d="M512 0C547.3 0 576 28.65 576 64V192H96V64C96 28.65 124.7 0 160 0H512zM192 64C174.3 64 160 78.33 160 96C160 113.7 174.3 128 192 128C209.7 128 224 113.7 224 96C224 78.33 209.7 64 192 64zM280 120H488C501.3 120 512 109.3 512 96C512 82.75 501.3 72 488 72H280C266.7 72 256 82.75 256 96C256 109.3 266.7 120 280 120zM48 376C48 424.6 87.4 464 136 464H456C469.3 464 480 474.7 480 488C480 501.3 469.3 512 456 512H136C60.89 512 0 451.1 0 376V120C0 106.7 10.75 96 24 96C37.25 96 48 106.7 48 120V376z"/><path class="fa-secondary" d="M224 96C224 113.7 209.7 128 192 128C174.3 128 160 113.7 160 96C160 78.33 174.3 64 192 64C209.7 64 224 78.33 224 96zM160 416C124.7 416 96 387.3 96 352V192H576V352C576 387.3 547.3 416 512 416H160z"/></svg>';
        $icon_table = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 96C0 60.65 28.65 32 64 32H448C483.3 32 512 60.65 512 96V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V96zM16 96V160H496V96C496 69.49 474.5 48 448 48H64C37.49 48 16 69.49 16 96V96zM248 176H16V304H248V176zM264 176V304H496V176H264zM248 320H16V416C16 442.5 37.49 464 64 464H248V320zM448 464C474.5 464 496 442.5 496 416V320H264V464H448z"/></svg>';
        $icon_horz_rule = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M607.9 288h-576C14.25 288 0 273.7 0 256S14.38 224 32.06 224h576C625.8 224 640 238.3 640 255.1S625.6 288 607.9 288z"/></svg>';

        acf_register_block_type(
            array(
                'name' => 'image-pathways',
                'title' => __('QNTM Image Pathways'),
                'description' => __('QNTM Image Pathways'),
                'render_template' => '/resources/blocks/image-pathways.php',
                'category' => 'qntm-blocks',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M512 32H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h448c35.35 0 64-28.65 64-64V96C576 60.65 547.3 32 512 32zM560 416c0 26.47-21.53 48-48 48H64c-26.47 0-48-21.53-48-48V96c0-26.47 21.53-48 48-48h448c26.47 0 48 21.53 48 48V416zM480 96H96C78.33 96 64 110.3 64 128v256c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32V128C512 110.3 497.7 96 480 96zM496 384c0 8.822-7.178 16-16 16H96c-8.822 0-16-7.178-16-16V288h107.1l29.78 59.58C218.2 350.3 220.1 352 224 352c3.094-.0781 6.062-1.922 7.312-4.75l57.13-128.5l32.41 64.84C322.2 286.3 324.1 288 328 288h80C412.4 288 416 284.4 416 280S412.4 272 408 272h-75.06l-37.78-75.58C293.8 193.7 291 191.9 287.8 192C284.7 192.1 281.9 193.9 280.7 196.8l-57.13 128.5L199.2 276.4C197.8 273.7 195 272 192 272H80V128c0-8.822 7.178-16 16-16h384c8.822 0 16 7.178 16 16V384z"/></svg>',
                'keywords' => array('rates', 'featured'),
                'mode' => 'preview',
                'supports' => array('mode' => true, 'align' => false, 'anchor' => true),
            )
        );

        acf_register_block(
            array(
                'name' => 'application-status',
                'title' => __('QNTM Application Status'),
                'description' => __('QNTM Application Status'),
                'render_template' => '/resources/blocks/application-status.php',
                'category' => 'qntm-blocks',
                'mode' => 'preview',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><defs><style>.fa-secondary{opacity:.4}</style></defs><path class="fa-primary" d="M448 32C483.3 32 512 60.65 512 96V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H448zM448 96H64V416H448V96z"/><path class="fa-secondary" d="M128 160V96H192V160H448V224H192V288H448V352H192V416H128V352H64V288H128V224H64V160H128z"/></svg>',
                'keywords' => array('content'),
                'supports' => array('mode' => true, 'align' => false, 'anchor' => true)
            )
        );

        acf_register_block_type(array(
            'name'                => 'checkmark-list',
            'title'                => __('QNTM Checkmark List'),
            'description'        => __('QNTM Checkmark List'),
            'render_template'    => '/resources/blocks/checkmark-list.php',
            'category' => 'qntm-blocks',
            'icon'                => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><defs><style>.fa-secondary{opacity:.4}</style></defs><path class="fa-primary" d="M176 256c35.35 0 64-28.65 64-64s-28.65-64-64-64s-64 28.65-64 64S140.7 256 176 256zM208 288h-64C99.82 288 64 323.8 64 368C64 376.8 71.16 384 80 384h192c8.836 0 16-7.164 16-16C288 323.8 252.2 288 208 288z"/><path class="fa-secondary" d="M512 32H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h448c35.35 0 64-28.65 64-64V96C576 60.65 547.3 32 512 32zM176 128c35.35 0 64 28.65 64 64s-28.65 64-64 64s-64-28.65-64-64S140.7 128 176 128zM272 384h-192C71.16 384 64 376.8 64 368C64 323.8 99.82 288 144 288h64c44.18 0 80 35.82 80 80C288 376.8 280.8 384 272 384zM496 320h-128C359.2 320 352 312.8 352 304S359.2 288 368 288h128C504.8 288 512 295.2 512 304S504.8 320 496 320zM496 256h-128C359.2 256 352 248.8 352 240S359.2 224 368 224h128C504.8 224 512 231.2 512 240S504.8 256 496 256zM496 192h-128C359.2 192 352 184.8 352 176S359.2 160 368 160h128C504.8 160 512 167.2 512 176S504.8 192 496 192z"/></svg>',
            'keywords'            => array('checkmark', 'content'),
            'mode'              => 'preview',
            'supports'             => array('mode' => true, 'align' => false, 'anchor' => true),
        ));
        acf_register_block(array(
            'name'                => 'comparison',
            'title'                => __('QNTM Comparison'),
            'description'        => __('QNTM Comparison'),
            'render_template'    => '/resources/blocks/comparison.php',
            'category' => 'qntm-blocks',
            'mode'                => 'edit',
            'icon'                => $icon_square_chev,
            'keywords'            => array('content'),
            'supports'             => array('mode' => true, 'align' => false, 'anchor' => true)
        ));
        acf_register_block_type(
            array(
                'name' => 'fifty',
                'title' => __('QNTM 50/50 Content'),
                'description' => __('QNTM 50/50 Content'),
                'render_template' => '/resources/blocks/fifty.php',
                'category' => 'qntm-blocks',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M384 248h-152V96c0-4.422-3.578-8-8-8H64C59.58 88 56 91.58 56 96v160c0 4.422 3.578 8 8 8h152V416c0 4.422 3.578 8 8 8h160c4.422 0 8-3.578 8-8V256C392 251.6 388.4 248 384 248zM216 248h-144v-144h144V248zM376 408h-144v-144h144V408zM384 32h-320C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h320c35.35 0 64-28.65 64-64V96C448 60.65 419.3 32 384 32zM432 416c0 26.47-21.53 48-48 48H64c-26.47 0-48-21.53-48-48V96c0-26.47 21.53-48 48-48h320c26.47 0 48 21.53 48 48V416z"/></svg>',
                'keywords' => array('content'),
                'mode' => 'preview',
                'supports' => array('mode' => true, 'align' => false, 'anchor' => true),
            )
        );
        acf_register_block_type(
            array(
                'name' => 'accordion',
                'title' => __('QNTM Accordion'),
                'description' => __('Accordion'),
                'render_template' => '/resources/blocks/accordion.php',
                'category' => 'qntm-blocks',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M288 352h-24.02l.0098-135.1c0-.0176 0 .0176 0 0C263.1 211.6 260.4 208 256 208H224c-4.406 0-8 3.594-8 8S219.6 224 224 224h23.98v128H224c-4.406 0-8 3.594-8 8S219.6 368 224 368h64c4.406 0 8-3.594 8-8S292.4 352 288 352zM255.9 176c8.822 0 16-7.178 16-16s-7.178-16-16-16s-16 7.178-16 16S247.1 176 255.9 176zM256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 496c-132.3 0-240-107.7-240-240S123.7 16 256 16s240 107.7 240 240S388.3 496 256 496z"/></svg>',
                'keywords' => array('content'),
                'mode' => 'preview',
                'supports' => array('mode' => true, 'align' => false, 'anchor' => true),
            )
        );
        acf_register_block(array(
            'name'                => 'cta',
            'title'                => __('QNTM CTA'),
            'description'        => __('Call-To-Action'),
            'render_template'    => '/resources/blocks/cta.php',
            'category' => 'qntm-blocks',
            'mode'                => 'edit',
            'icon'                => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M160 184c13.26 0 24-10.75 24-24S173.3 136 160 136C146.7 136 136 146.7 136 160S146.7 184 160 184zM346.6 171.9c-11.28-15.81-38.5-15.94-49.1-.0313L252.6 233.3L245.6 224.4C234.2 209.9 208.6 209.8 197.2 224.4L134.2 304.8c-7.123 9.131-8.154 21.55-2.623 31.56C136.8 345.1 147.1 352 158.4 352h259.2c11 0 21.17-5.805 26.54-15.09c0-.0313-.0313 .0313 0 0c5.656-9.883 5.078-21.84-1.578-31.15L346.6 171.9zM162.2 319.9l58.25-75.61l20.09 25.66C244.9 275.5 258.1 280.6 266.1 269.4l54.44-78.75l92.68 129.2H162.2zM512 64H64C28.65 64 0 92.65 0 128v256c0 35.35 28.65 64 64 64h448c35.35 0 64-28.65 64-64V128C576 92.65 547.3 64 512 64zM544 384c0 17.64-14.36 32-32 32H64c-17.64 0-32-14.36-32-32V128c0-17.64 14.36-32 32-32h448c17.64 0 32 14.36 32 32V384z"/></svg>',
            'keywords'            => array('content'),
            'supports'             => array('mode' => true, 'align' => false, 'anchor' => true),
        ));
        acf_register_block(array(
            'name'                => 'secondary-content',
            'title'                => __('QNTM Secondary Content'),
            'description'        => __('Secondary Content'),
            'render_template'    => '/resources/blocks/secondary-content.php',
            'category' => 'qntm-blocks',
            'mode'                => 'edit',
            'icon'                => $icon_columns3,
            'keywords'            => array('content'),
            'supports'             => array('mode' => true, 'align' => false, 'anchor' => true),
        ));
        acf_register_block(array(
            'name'                => 'icons',
            'title'                => __('QNTM Icons'),
            'description'        => __('Icons Block'),
            'render_template'    => '/resources/blocks/icons.php',
            'category' => 'qntm-blocks',
            'mode'                => 'edit',
            'icon'                => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM413.3 496H34.66c-10.29 0-18.66-8.375-18.66-18.67C15.1 390.6 86.58 320 173.3 320H274.7C361.4 320 432 390.6 432 477.3C432 487.6 423.6 496 413.3 496zM224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM223.1 16C285.8 16 336 66.24 336 128S285.8 240 223.1 240s-112-50.24-112-112S162.2 16 223.1 16zM432 256c64.62 0 116.4-54.71 111.7-120.3c-3.445-47.64-38.17-88.11-84.4-100.1c-26.62-6.918-51.32-3.184-72.75 6.594c-3.914 1.789-5.566 6.359-3.695 10.23c.1055 .2187 .2109 .4414 .3164 .6602c1.76 3.684 6.051 5.445 9.762 3.742c14.72-6.77 31.25-10.18 48.96-8.227C490 53.84 527.8 95.26 528 143.7C528.2 196.8 485 240 432 240c-19.32 0-37.13-5.961-52.16-15.88c-3.369-2.219-7.834-1.074-10.13 2.242c-.1445 .2109-.2891 .418-.4355 .625c-2.473 3.543-1.535 8.344 2.08 10.71C388.8 249.1 409.5 256 432 256zM479.1 320H448c-4.418 0-8 3.582-8 8S443.6 336 448 336h31.1c79.5 0 144.2 64.75 144 144.3C623.1 488.1 616.7 496 608 496H496c-4.418 0-8 3.582-8 8S491.6 512 496 512h112C625.7 512 640 497.6 640 479.1C639.9 391.7 568.3 320 479.1 320z"/></svg>',
            'keywords'            => array('content'),
            'supports'             => array('mode' => true, 'align' => false, 'anchor' => true),
        ));
        acf_register_block(array(
            'name'                => 'timeline',
            'title'                => __('QNTM Timeline'),
            'description'        => __('A Timeline Block'),
            'render_template'    => '/resources/blocks/timeline.php',
            'category' => 'qntm-blocks',
            'mode'                => 'edit',
            'icon'                => $qntm_icon,
            'keywords'            => array('content'),
            'supports'             => array('mode' => true, 'align' => false, 'anchor' => true),
        ));
        acf_register_block_type(
            array(
                'name' => 'checkerboard',
                'title' => __('QNTM Checkerboard'),
                'description' => __('Checkerboard'),
                'render_template' => '/resources/blocks/checkerboard.php',
                'category' => 'qntm-blocks',
                'keywords' => array('content'),
                'mode' => 'preview',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M261 229l215-158.4 29.3 29.3L347 315 261 229zM160 320l0 0-25.4 25.4c-12.5 12.5-12.5 32.8 0 45.3l50.7 50.7c12.5 12.5 32.8 12.5 45.3 0L256 416h71.7c15.3 0 29.6-7.2 38.6-19.5L567.6 123.4c5.5-7.4 8.4-16.4 8.4-25.6c0-11.4-4.5-22.4-12.6-30.5L508.6 12.6C500.5 4.5 489.6 0 478.2 0C469 0 460 2.9 452.6 8.4L179.5 209.6c-12.3 9-19.5 23.4-19.5 38.6V320zm-57.9 83.3l-63 63c-4.5 4.5-7 10.6-7 17V488c0 13.3 10.7 24 24 24h68.7c6.4 0 12.5-2.5 17-7l31-31-70.6-70.6zM256 464c-13.3 0-24 10.7-24 24s10.7 24 24 24H584c13.3 0 24-10.7 24-24s-10.7-24-24-24H256z"/></svg>',
                'supports' => array('mode' => true, 'align' => false, 'anchor' => true),
            )
        );
        acf_register_block_type(
            array(
                'name' => 'simple-table',
                'title' => __('QNTM Simple Table'),
                'description' => __('Simple Table'),
                'render_template' => '/resources/blocks/simple-table.php',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 96C0 60.65 28.65 32 64 32H448C483.3 32 512 60.65 512 96V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V96zM16 96V416C16 442.5 37.49 464 64 464H128V48H64C37.49 48 16 69.49 16 96zM496 416V264H144V464H448C474.5 464 496 442.5 496 416zM496 248V96C496 69.49 474.5 48 448 48H144V248H496z"/></svg>',
                'category' => 'qntm-blocks',
                'keywords' => array('content'),
                'mode' => 'preview',
                'supports' => array('mode' => true, 'align' => false, 'anchor' => true),
            )
        );
        acf_register_block_type(
            array(
                'name' => 'featured-rates',
                'title' => __('QNTM Featured Rates'),
                'description' => __('Featured Rates and Financial Tools'),
                'render_template' => '/resources/blocks/featured-rates.php',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 96C0 60.65 28.65 32 64 32H448C483.3 32 512 60.65 512 96V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V96zM16 96V416C16 442.5 37.49 464 64 464H128V48H64C37.49 48 16 69.49 16 96zM496 416V264H144V464H448C474.5 464 496 442.5 496 416zM496 248V96C496 69.49 474.5 48 448 48H144V248H496z"/></svg>',
                'category' => 'qntm-blocks',
                'keywords' => array('content'),
                'mode' => 'preview',
                'supports' => array('mode' => true, 'align' => false, 'anchor' => true),
            )
        );
    }
}


if (!function_exists('my_acf_block_render_callback')) {

    function my_acf_block_render_callback($block)
    {

        // convert name ("acf/testimonial") into path friendly slug ("testimonial")
        $slug = str_replace('acf/', '', $block['name']);
        $templatepath = get_stylesheet_directory();

        // include a template part from within the "template-parts/block" folder
        if (file_exists($templatepath . "/resources/blocks/{$slug}.php")) {
            include($templatepath . "/resources/blocks/{$slug}.php");
        }
    }
}



function qntm_block_categories($categories)
{

    return array_merge(
        [
            [
                'slug' => 'qntm-blocks',
                'title' => __('QNTM Blocks', 'qntm'),
            ],
            [
                'slug' => 'qntm-page-blocks',
                'title' => 'QNTM Page Blocks', 'qntm'
            ]
        ],
        $categories
    );
}
add_action('block_categories_all', 'qntm_block_categories', 10, 2);



function qd_allowed_block_types($allowed_blocks)
{

    return array(
        //Default Blocks to keep
        'core/heading',
        'core/paragraph',
        'core/list',
        'core/list-item',
        'core/image',
        'core/html',
        'core/quote',
        'core/reusableBlock',
        'core/shortcode',
        'core/table',
        // 'core/code',
        // 'core/preformatted',
        // 'core/button',
        // 'core/columns',
        'core/spacer',
        'core/gallery',
        // 'core/audio',
        // 'core/cover',
        // 'core/file',
        // 'core/pullquote',
        'core/separator',
        // 'core/media-text',
        // 'core/more',
        // 'core/nextpage',
        // 'core/search',
        // 'core/freeform',

        //Adding default embed blocks
        'core/embed',
        'core-embed/youtube',
        'core-embed/vimeo',
        'core-embed/twitter',
        'core-embed/facebook',
        'core-embed/instagram',
        'core-embed/wordpress',
        'core-embed/soundcloud',
        'core-embed/spotify',
        'core-embed/flickr',
        'core-embed/animoto',
        'core-embed/cloudup',
        'core-embed/collegehumor',
        'core-embed/dailymotion',
        'core-embed/funnyordie',
        'core-embed/hulu',
        'core-embed/imgur',
        'core-embed/issuu',
        'core-embed/kickstarter',
        'core-embed/meetup-com',
        'core-embed/mixcloud',
        'core-embed/photobucket',
        'core-embed/polldaddy',
        'core-embed/reddit',
        'core-embed/reverbnation',
        'core-embed/screencast',
        'core-embed/scribd',
        'core-embed/slideshare',
        'core-embed/smugmug',
        'core-embed/speaker',
        'core-embed/ted',
        'core-embed/tumblr',
        'core-embed/videopress',
        'core-embed/wordpress-tv',

        //Adding reusable blocks as an option.
        'core/block',
        'core/template',

        //Custom built ACF blocks.
        //New blocks will need to be added here to show up in the editor.


        'acf/image-pathways',
        'acf/application-status',
        'acf/checkmark-list',
        'acf/comparison',
        'acf/fifty',
        'acf/accordion',
        'acf/secondary-content',
        'acf/icons',
        'acf/cta',
        'acf/timeline',
        'acf/checkerboard',
        'acf/simple-table',
        'acf/featured-rates',



    );
}

add_filter('allowed_block_types_all', 'qd_allowed_block_types');
