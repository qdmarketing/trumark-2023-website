<?php
if (get_field('qntm_enable_alerts', 'option')) :
    // Get the repeater field values
    $qntm_alerts = get_field('qntm_alerts', 'option');

    // Initialize an empty array to store grouped items
    $grouped_alerts = array();

    // Loop through the repeater field and group items by 'qntm_alert_position'
    foreach ($qntm_alerts as $alert) {
        $position = $alert['qntm_alert_position'];
        // var_dump($position);

        // Check if a group with this position exists, if not, create it
        if (!isset($grouped_alerts[$position])) {
            $grouped_alerts[$position] = array();
        }

        // Add the current item to the group
        $grouped_alerts[$position][] = $alert;
    }

    // Loop through the grouped items and output them in separate divs
    foreach ($grouped_alerts as $position => $alerts) {
        echo '<div class="alert-group alert-group--' . $position . '">';
        //   echo '<h2>' . $position . '</h2>'; // Output the position as a heading

        foreach ($alerts as $alert) :
            $disableClose = isset($alert['qd_alert_disable_close']) ? $alert['qd_alert_disable_close'] : "";
            // Output the individual items within the group
            echo '<div class="alert-item alert-item--' . $alert['qntm_alert_color'] . '">';
            echo '<div class="container-xxl h-full alert-item__container">';
            echo '<div class="alert-item__text"> <i class="fa-regular fa-bell"></i>';
            echo $alert['qntm_alert_text'];
            // Add more fields as needed
            if (!$disableClose) { ?>
                <a class="alert-item__close"><i class="fa-solid fa-x"></i></a>
<?php }
            echo '</div>';
            echo '</div>';
            echo '</div>';
        endforeach;

        echo '</div>'; // Close the alert-group div
    }
endif;
