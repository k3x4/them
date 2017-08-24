<?php
/**
 * Redux Framework is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Redux Framework is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Redux Framework. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package     ReduxFramework
 * @author      Dovy Paukstys
 * @version     3.1.5
 */

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) exit;

// Don't duplicate me!
if( !class_exists( 'ReduxFramework_them_spacing' ) ) {

    /**
     * Main ReduxFramework_custom_field class
     *
     * @since       1.0.0
     */
    class ReduxFramework_them_spacing extends ReduxFramework {
    
        /**
         * Field Constructor.
         *
         * Required - must call the parent constructor, then assign field and value to vars, and obviously call the render field function
         *
         * @since       1.0.0
         * @access      public
         * @return      void
         */
        /*function __construct( $field = array(), $value ='', $parent ) {
        
            
            $this->parent = $parent;
            $this->field = $field;
            $this->value = $value;

            if ( empty( $this->extension_dir ) ) {
                $this->extension_dir = trailingslashit( str_replace( '\\', '/', dirname( __FILE__ ) ) );
                $this->extension_url = site_url( str_replace( trailingslashit( str_replace( '\\', '/', ABSPATH ) ), '', $this->extension_dir ) );
            }    

            // Set default args for this field to avoid bad indexes. Change this to anything you use.
            $defaults = array(
                'options'           => array(),
                'stylesheet'        => '',
                'output'            => true,
                'enqueue'           => true,
                'enqueue_frontend'  => true
            );
            $this->field = wp_parse_args( $this->field, $defaults );            
        
        }*/
        
        function __construct( $field = array(), $value = '', $parent ) {
            $this->parent = $parent;
            $this->field  = $field;
            $this->value  = $value;
            
            if ( empty( $this->extension_dir ) ) {
                $this->extension_dir = trailingslashit( str_replace( '\\', '/', dirname( __FILE__ ) ) );
                $this->extension_url = site_url( str_replace( trailingslashit( str_replace( '\\', '/', ABSPATH ) ), '', $this->extension_dir ) );
            }   
        }

        /**
         * Field Render Function.
         *
         * Takes the vars and outputs the HTML for the field in the settings
         *
         * @since       1.0.0
         * @access      public
         * @return      void
         */
        function render() {
            /*
             * So, in_array() wasn't doing it's job for checking a passed array for a proper value.
             * It's wonky.  It only wants to check the keys against our array of acceptable values, and not the key's
             * value.  So we'll use this instead.  Fortunately, a single no array value can be passed and it won't
             * take a dump.
             */

            // No errors please
            // Set field values
            $defaults = array(
                'units'          => '',
                'mode'           => 'padding',
                'top'            => true,
                'bottom'         => true,
                'all'            => false,
                'left'           => true,
                'right'          => true,
                'units_extended' => false,
                'display_units'  => true
            );

            $this->field = wp_parse_args( $this->field, $defaults );

            // Set default values
            $defaults = array(
                'sameall' => '1',
                'top'    => '',
                'right'  => '',
                'bottom' => '',
                'left'   => '',
                'units'  => 'px'
            );

            $this->value = wp_parse_args( $this->value, $defaults );

            /*
             * Acceptable values checks.  If the passed variable doesn't pass muster, we unset them
             * and reset them with default values to avoid errors.
             */

            // If units field has a value but is not an acceptable value, unset the variable
            if ( isset( $this->field['units'] ) && ! Redux_Helpers::array_in_array( $this->field['units'], array(
                        '',
                        false,
                        '%',
                        'in',
                        'cm',
                        'mm',
                        'em',
                        'rem',
                        'ex',
                        'pt',
                        'pc',
                        'px'
                    ) )
            ) {
                unset( $this->field['units'] );
            }

            //if there is a default unit value  but is not an accepted value, unset the variable
            if ( isset( $this->value['units'] ) && ! Redux_Helpers::array_in_array( $this->value['units'], array(
                        '',
                        '%',
                        'in',
                        'cm',
                        'mm',
                        'em',
                        'rem',
                        'ex',
                        'pt',
                        'pc',
                        'px'
                    ) )
            ) {
                unset( $this->value['units'] );
            }

//            if ($this->field['mode'] == "absolute") {
//                $this->field['units'] = "";
//                $this->value['units'] = "";
//            }

            if ( $this->field['units'] == false ) {
                $this->value == "";
            }

            if ( isset( $this->field['mode'] ) && ! in_array( $this->field['mode'], array(
                        'margin',
                        'padding'
                    ) )
            ) {
                if ( $this->field['mode'] == "absolute" ) {
                    $absolute = true;
                }
                $this->field['mode'] = "";
            }

            $value = array(
                'sameall' => isset( $this->value[ 'sameall' ] ) ? filter_var( $this->value[ 'sameall' ], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ) : filter_var( $this->value['sameall'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),
                'top'    => isset( $this->value[ $this->field['mode'] . '-top' ] ) ? filter_var( $this->value[ $this->field['mode'] . '-top' ], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ) : filter_var( $this->value['top'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),
                'right'  => isset( $this->value[ $this->field['mode'] . '-right' ] ) ? filter_var( $this->value[ $this->field['mode'] . '-right' ], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ) : filter_var( $this->value['right'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),
                'bottom' => isset( $this->value[ $this->field['mode'] . '-bottom' ] ) ? filter_var( $this->value[ $this->field['mode'] . '-bottom' ], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ) : filter_var( $this->value['bottom'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),
                'left'   => isset( $this->value[ $this->field['mode'] . '-left' ] ) ? filter_var( $this->value[ $this->field['mode'] . '-left' ], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ) : filter_var( $this->value['left'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION )
            );

            // if field units has a value and is NOT an array, then evaluate as needed.
            if ( isset( $this->field['units'] ) && ! is_array( $this->field['units'] ) ) {

                //if units fields has a value and is not empty but units value does not then make units value the field value
                if ( isset( $this->field['units'] ) && $this->field['units'] != "" && ! isset( $this->value['units'] ) || $this->field['units'] == false ) {
                    $this->value['units'] = $this->field['units'];

                    // If units field does NOT have a value and units value does NOT have a value, set both to blank (default?)
                } else if ( ! isset( $this->field['units'] ) && ! isset( $this->value['units'] ) ) {
                    $this->field['units'] = 'px';
                    $this->value['units'] = 'px';

                    // If units field has NO value but units value does, then set unit field to value field
                } else if ( ! isset( $this->field['units'] ) && isset( $this->value['units'] ) ) { // If Value is defined
                    $this->field['units'] = $this->value['units'];

                    // if unit value is set and unit value doesn't equal unit field (coz who knows why)
                    // then set unit value to unit field
                } elseif ( isset( $this->value['units'] ) && $this->value['units'] !== $this->field['units'] ) {
                    $this->value['units'] = $this->field['units'];
                }

                // do stuff based on unit field NOT set as an array
            } elseif ( isset( $this->field['units'] ) && is_array( $this->field['units'] ) ) {
                // nothing to do here, but I'm leaving the construct just in case I have to debug this again.
            }

            if ( isset( $this->field['units'] ) ) {
                $value['units'] = $this->value['units'];
            }

            $this->value = $value;

            if ( ! empty( $this->field['mode'] ) ) {
                $this->field['mode'] = $this->field['mode'] . "-";
            }


            $defaults = array(
                'sameall' => '1',
                'top'    => '',
                'right'  => '',
                'bottom' => '',
                'left'   => '',
                'units'  => ''
            );

            $this->value = wp_parse_args( $this->value, $defaults );

            if ( isset( $this->field['select2'] ) ) { // if there are any let's pass them to js
                $select2_params = json_encode( $this->field['select2'] );
                $select2_params = htmlspecialchars( $select2_params, ENT_QUOTES );

                echo '<input type="hidden" class="select2_params" value="' . $select2_params . '">';
            }

            echo '<input type="hidden" class="field-units" value="' . $this->value['units'] . '">';

            if ( isset( $this->field['all'] ) && $this->field['all'] == true ) {
                echo '<div class="field-them_spacing-input input-prepend"><span class="add-on"><i class="el el-fullscreen icon-large"></i></span><input type="text" class="redux-them_spacing-all redux-them_spacing-input mini ' . $this->field['class'] . '" placeholder="' . __( 'All', 'redux-framework' ) . '" rel="' . $this->field['id'] . '-all" value="' . $this->value['top'] . '"></div>';
            }
            
            echo '<input type="hidden" id="' . $this->field['id'] . '-sameall" class="checkbox-check" data-val="1" name="' . $this->field['name'] . $this->field['name_suffix'] . '[sameall]' . '" value="' . $this->value['sameall'] . '" ' . '/>';

            if ( $this->field['top'] === true ) {
                echo '<input type="hidden" class="redux-them_spacing-value" id="' . $this->field['id'] . '-top" name="' . $this->field['name'] . $this->field['name_suffix'] . '[' . $this->field['mode'] . 'top]' . '" value="' . $this->value['top'] . ( ! empty( $this->value['top'] ) ? $this->value['units'] : '' ) . '">';
            }

            if ( $this->field['right'] === true ) {
                echo '<input type="hidden" class="redux-them_spacing-value" id="' . $this->field['id'] . '-right" name="' . $this->field['name'] . $this->field['name_suffix'] . '[' . $this->field['mode'] . 'right]' . '" value="' . $this->value['right'] . ( ! empty( $this->value['right'] ) ? $this->value['units'] : '' ) . '">';
            }

            if ( $this->field['bottom'] === true ) {
                echo '<input type="hidden" class="redux-them_spacing-value" id="' . $this->field['id'] . '-bottom" name="' . $this->field['name'] . $this->field['name_suffix'] . '[' . $this->field['mode'] . 'bottom]' . '" value="' . $this->value['bottom'] . ( ! empty( $this->value['bottom'] ) ? $this->value['units'] : '' ) . '">';
            }

            if ( $this->field['left'] === true ) {
                echo '<input type="hidden" class="redux-them_spacing-value" id="' . $this->field['id'] . '-left" name="' . $this->field['name'] . $this->field['name_suffix'] . '[' . $this->field['mode'] . 'left]' . '" value="' . $this->value['left'] . ( ! empty( $this->value['left'] ) ? $this->value['units'] : '' ) . '">';
            }

            if ( ! isset( $this->field['all'] ) || $this->field['all'] !== true ) {
                   
                echo '<label>';
                echo '<input type="checkbox" rel="' . $this->field['id'] . '-sameall" class="redux-them_spacing-checkbox checkbox ' . $this->field['class'] . '" ' . checked($this->value['sameall'], '1', false) . '/>';
                _e('Same for all', THEME_DOMAIN);
                echo '</label>';
                echo '<div class="clear"></div>';
                
                /**
                 * Top
                 * */
                if ( $this->field['top'] === true ) {
                    echo '<div class="field-them_spacing-input input-prepend"><span class="add-on"><i class="el el-arrow-up icon-large"></i></span><input type="text" class="redux-them_spacing-top redux-them_spacing-input mini ' . $this->field['class'] . '" placeholder="' . __( 'Top', 'redux-framework' ) . '" rel="' . $this->field['id'] . '-top" value="' . $this->value['top'] . '"></div>';
                }

                /**
                 * Right
                 * */
                if ( $this->field['right'] === true ) {
                    echo '<div class="field-them_spacing-input input-prepend"><span class="add-on"><i class="el el-arrow-right icon-large"></i></span><input type="text" class="redux-them_spacing-right redux-them_spacing-input mini ' . $this->field['class'] . '" placeholder="' . __( 'Right', 'redux-framework' ) . '" rel="' . $this->field['id'] . '-right" value="' . $this->value['right'] . '"></div>';
                }

                /**
                 * Bottom
                 * */
                if ( $this->field['bottom'] === true ) {
                    echo '<div class="field-them_spacing-input input-prepend"><span class="add-on"><i class="el el-arrow-down icon-large"></i></span><input type="text" class="redux-them_spacing-bottom redux-them_spacing-input mini ' . $this->field['class'] . '" placeholder="' . __( 'Bottom', 'redux-framework' ) . '" rel="' . $this->field['id'] . '-bottom" value="' . $this->value['bottom'] . '"></div>';
                }

                /**
                 * Left
                 * */
                if ( $this->field['left'] === true ) {
                    echo '<div class="field-them_spacing-input input-prepend"><span class="add-on"><i class="el el-arrow-left icon-large"></i></span><input type="text" class="redux-them_spacing-left redux-them_spacing-input mini ' . $this->field['class'] . '" placeholder="' . __( 'Left', 'redux-framework' ) . '" rel="' . $this->field['id'] . '-left" value="' . $this->value['left'] . '"></div>';
                }
            }

            /**
             * Units
             * */
            if ( $this->field['units'] !== false && is_array( $this->field['units'] ) /* && !isset($absolute) */ && $this->field['display_units'] == true ) {

                echo '<div class="select_wrapper them_spacing-units" original-title="' . __( 'Units', 'redux-framework' ) . '">';
                echo '<select data-placeholder="' . __( 'Units', 'redux-framework' ) . '" class="redux-them_spacing redux-them_spacing-units select ' . $this->field['class'] . '" original-title="' . __( 'Units', 'redux-framework' ) . '" name="' . $this->field['name'] . $this->field['name_suffix'] . '[units]' . '" id="' . $this->field['id'] . '_units">';

                if ( $this->field['units_extended'] ) {
                    $testUnits = array( 'px', 'em', 'rem', '%', 'in', 'cm', 'mm', 'ex', 'pt', 'pc' );
                } else {
                    $testUnits = array( 'px', 'em', 'pt', 'rem', '%' );
                }

                if ( $this->field['units'] != "" || is_array( $this->field['units'] ) ) {
                    $testUnits = $this->field['units'];
                }

                echo '<option></option>';

                if ( in_array( $this->field['units'], $testUnits ) ) {
                    echo '<option value="' . $this->field['units'] . '" selected="selected">' . $this->field['units'] . '</option>';
                } else {
                    foreach ( $testUnits as $aUnit ) {
                        echo '<option value="' . $aUnit . '" ' . selected( $this->value['units'], $aUnit, false ) . '>' . $aUnit . '</option>';
                    }
                }
                echo '</select></div>';

            }
        }
    
        /**
         * Enqueue Function.
         *
         * If this field requires any scripts, or css define this function and register/enqueue the scripts/css
         *
         * @since       1.0.0
         * @access      public
         * @return      void
         */
        public function enqueue() {

            //$extension = ReduxFramework_extension_them_spacing::getInstance();
        
            wp_enqueue_script(
                'redux-field-icon-select-js', 
                $this->extension_url . 'field_them_spacing.js', 
                array( 'jquery', 'select2-js', 'redux-js' ),
                time(),
                true
            );

            wp_enqueue_style(
                'redux-field-icon-select-css', 
                $this->extension_url . 'field_them_spacing.css',
                time(),
                true
            );
        
        }
        
        /**
         * Output Function.
         *
         * Used to enqueue to the front-end
         *
         * @since       1.0.0
         * @access      public
         * @return      void
         */        
        /*public function output() {

            if ( $this->field['enqueue_frontend'] ) {

            }
            
        }*/
        
        /*public function output() {

            if ( ! isset( $this->field['mode'] ) ) {
                $this->field['mode'] = "padding";
            }

            if ( isset( $this->field['mode'] ) && ! in_array( $this->field['mode'], array(
                        'padding',
                        'absolute',
                        'margin'
                    ) )
            ) {
                $this->field['mode'] = "";
            }

            $mode  = ( $this->field['mode'] != "absolute" ) ? $this->field['mode'] : "";
            $units = isset( $this->value['units'] ) ? $this->value['units'] : "";
            $style = '';

            if ( ! empty( $mode ) ) {
                foreach ( $this->value as $key => $value ) {
                    if ( $key == "units" ) {
                        continue;
                    }

                    // Strip off any alpha for is_numeric test - kp
                    $num_no_alpha = preg_replace('/[^\d.-]/', '', $value);

                    // Output if it's a numeric entry
                    if ( isset( $value ) && is_numeric( $num_no_alpha ) ) {
                        $style .= $key . ':' . $value . ';';
                    }

                }
            } else {
                $this->value['top']    = isset( $this->value['top'] ) ? $this->value['top'] : 0;
                $this->value['bottom'] = isset( $this->value['bottom'] ) ? $this->value['bottom'] : 0;
                $this->value['left']   = isset( $this->value['left'] ) ? $this->value['left'] : 0;
                $this->value['right']  = isset( $this->value['right'] ) ? $this->value['right'] : 0;

                $cleanValue = array(
                    'top'    => isset( $this->value[ $mode . '-top' ] ) ? filter_var( $this->value[ $mode . '-top' ], FILTER_SANITIZE_NUMBER_INT ) : filter_var( $this->value['top'], FILTER_SANITIZE_NUMBER_INT ),
                    'right'  => isset( $this->value[ $mode . '-right' ] ) ? filter_var( $this->value[ $mode . '-right' ], FILTER_SANITIZE_NUMBER_INT ) : filter_var( $this->value['right'], FILTER_SANITIZE_NUMBER_INT ),
                    'bottom' => isset( $this->value[ $mode . '-bottom' ] ) ? filter_var( $this->value[ $mode . '-bottom' ], FILTER_SANITIZE_NUMBER_INT ) : filter_var( $this->value['bottom'], FILTER_SANITIZE_NUMBER_INT ),
                    'left'   => isset( $this->value[ $mode . '-left' ] ) ? filter_var( $this->value[ $mode . '-left' ], FILTER_SANITIZE_NUMBER_INT ) : filter_var( $this->value['left'], FILTER_SANITIZE_NUMBER_INT )
                );

                if ( isset( $this->field['all'] ) && true == $this->field['all'] ) {
                    $style .= $mode . 'top:' . $cleanValue['top'] . $units . ';';
                    $style .= $mode . 'bottom:' . $cleanValue['top'] . $units . ';';
                    $style .= $mode . 'right:' . $cleanValue['top'] . $units . ';';
                    $style .= $mode . 'left:' . $cleanValue['top'] . $units . ';';
                } else {
                    if ( true == $this->field['top'] ) {
                        $style .= $mode . 'top:' . $cleanValue['top'] . $units . ';';
                    }

                    if ( true == $this->field['bottom'] ) {
                        $style .= $mode . 'bottom:' . $cleanValue['bottom'] . $units . ';';
                    }

                    if ( true == $this->field['left'] ) {
                        $style .= $mode . 'left:' . $cleanValue['left'] . $units . ';';
                    }

                    if ( true == $this->field['right'] ) {
                        $style .= $mode . 'right:' . $cleanValue['right'] . $units . ';';
                    }
                }
            }

            if ( ! empty( $style ) ) {

                if ( ! empty( $this->field['output'] ) && is_array( $this->field['output'] ) ) {
                    $keys = implode( ",", $this->field['output'] );
                    $this->parent->outputCSS .= $keys . "{" . $style . '}';
                }

                if ( ! empty( $this->field['compiler'] ) && is_array( $this->field['compiler'] ) ) {
                    $keys = implode( ",", $this->field['compiler'] );
                    $this->parent->compilerCSS .= $keys . "{" . $style . '}';
                }
            }
        }*/
        
    }
}
