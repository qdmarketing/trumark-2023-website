var el = wp.element.createElement;

var withControls = wp.compose.createHigherOrderComponent(function (BlockEdit) {
    return function (props) {
        if (props.name !== 'core/group') {
            return el(BlockEdit, props);
        }

        function handleToggle(className) {
            if (props.attributes.className?.includes(className)) {
                props.setAttributes({
                    className: props.attributes.className.replace(' ' + className, '')
                });
            } else {
                props.setAttributes({
                    className: (props.attributes.className || '') + ' ' + className
                });
            }
        }

        function handleSelect(className) {
            ['dropdown-class-1', 'dropdown-class-2', 'dropdown-class-3'].forEach((dropdownClass) => {
                if (props.attributes.className?.includes(dropdownClass)) {
                    props.setAttributes({
                        className: props.attributes.className.replace(' ' + dropdownClass, '')
                    });
                }
            });

            if (className) {
                props.setAttributes({
                    className: (props.attributes.className || '') + ' ' + className,
                    selectedDropdownClass: className
                });
            } else {
                props.setAttributes({
                    selectedDropdownClass: ''
                });
            }
        }

        // Custom controls go here
        return el(wp.element.Fragment, {},
            el(BlockEdit, props),
            el(wp.editor.InspectorControls, {},
                el(wp.components.PanelBody, { title: "Advanced Settings by QNTM" },
                    // el(wp.components.ToggleControl, {
                    //     label: "Add custom class 1",
                    //     checked: props.attributes.className?.includes('my-custom-class-1'),
                    //     onChange: function () {
                    //         handleToggle('my-custom-class-1');
                    //     }
                    // }),
                    // el(wp.components.ToggleControl, {
                    //     label: "Add custom class 2",
                    //     checked: props.attributes.className?.includes('my-custom-class-2'),
                    //     onChange: function () {
                    //         handleToggle('my-custom-class-2');
                    //     }
                    // }),
                    // el(wp.components.ToggleControl, {
                    //     label: "Add custom class 3",
                    //     checked: props.attributes.className?.includes('my-custom-class-3'),
                    //     onChange: function () {
                    //         handleToggle('my-custom-class-3');
                    //     }
                    // }),
                    el(wp.components.SelectControl, {
                        label: "Select a Block Padding",
                        value: props.attributes.selectedDropdownClass || '',
                        options : [
                            {label: 'None', value: ''},
                            {label: 'Small', value: 'wp-block-group--padding-sm'},
                            {label: 'Medium', value: 'wp-block-group--padding-md'},
                            {label: 'Large', value: 'wp-block-group--padding-lg'},
                            {label: 'X-Large', value: 'wp-block-group--padding-xl'}
                        ],
                        onChange: function (className) {
                            handleSelect(className);
                        }
                    })
                )
            )
        );
    };
}, 'withControls');

wp.hooks.addFilter('editor.BlockEdit', 'my-theme/with-controls', withControls);