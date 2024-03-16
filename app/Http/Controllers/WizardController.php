<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WizardController extends Controller {

    /**
     * Display wizard one of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title       = "Wizard 1";
        $description = "Some description for the page";

        $navigation_meta = $this->get_step_navigation_meta( 'pages.wizard.wizard_1.step_', 5 );

        $prev_page_url = $navigation_meta['prev_page_url'];
        $next_page_url = $navigation_meta['next_page_url'];

        $data = compact(
            'title',
            'description',
            'prev_page_url',
            'next_page_url'
        );

        return view( $navigation_meta['template'], $data );
    }

    /**
     * Display wizard two of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function two(){
        $title       = "Wizard 2";
        $description = "Some description for the page";

        $navigation_meta = $this->get_step_navigation_meta( 'pages.wizard.wizard_2.step_', 5 );

        $prev_page_url = $navigation_meta['prev_page_url'];
        $next_page_url = $navigation_meta['next_page_url'];

        $data = compact(
            'title',
            'description',
            'prev_page_url',
            'next_page_url'
        );

        return view( $navigation_meta['template'], $data );
    }

    /**
     * Display wizard three of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function three(){
        $title       = "Wizard 3";
        $description = "Some description for the page";

        $navigation_meta = $this->get_step_navigation_meta( 'pages.wizard.wizard_3.step_', 5 );

        $prev_page_url = $navigation_meta['prev_page_url'];
        $next_page_url = $navigation_meta['next_page_url'];

        $data = compact(
            'title',
            'description',
            'prev_page_url',
            'next_page_url'
        );

        return view( $navigation_meta['template'], $data );
    }

    /**
     * Display wizard four of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function four(){
        $title = "Wizard 4";
        $description = "Some description for the page";

        $navigation_meta = $this->get_step_navigation_meta( 'pages.wizard.wizard_4.step_', 5 );

        $prev_page_url = $navigation_meta['prev_page_url'];
        $next_page_url = $navigation_meta['next_page_url'];

        $data = compact(
            'title',
            'description',
            'prev_page_url',
            'next_page_url'
        );

        return view( $navigation_meta['template'], $data );
    }

    /**
     * Display wizard five of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function five(){
        $title       = "Wizard 5";
        $description = "Some description for the page";

        $navigation_meta = $this->get_step_navigation_meta( 'pages.wizard.wizard_5.step_', 4 );

        $prev_page_url = $navigation_meta['prev_page_url'];
        $next_page_url = $navigation_meta['next_page_url'];

        $data = compact(
            'title',
            'description',
            'prev_page_url',
            'next_page_url'
        );

        return view( $navigation_meta['template'], $data );
    }

    /**
     * Get Step Navigation Meta
     *
     * @param string $template_path
     * @param int $max_step
     * @param string $step_key Default 'step'
     *
     * @return array Step Navigation Meta
     */
    public function get_step_navigation_meta( $template_path, $max_step, $step_key = 'step' ) {
        $current_step = ( ! empty( $_GET[ $step_key ] ) ) ? (int) $_GET[ $step_key ] : 1;

        $current_step = ( $current_step < 0 ) ? 0 : $current_step;
        $current_step = ( $current_step > $max_step ) ? $max_step : $current_step;
        $template     = $template_path . $current_step;

        $prev_page = ( $current_step <= 1 ) ? '' : $current_step - 1;
        $next_page = ( $current_step >= $max_step ) ? '' : $current_step + 1;

        $prev_page_url = ( ! empty( $prev_page ) ) ? url()->current() . "?${step_key}=${prev_page}" : '';
        $next_page_url = ( ! empty( $next_page ) ) ? url()->current() . "?${step_key}=${next_page}" : '';

        return [
            'current_step'  => $current_step,
            'template'      => $template,
            'prev_page'     => $prev_page,
            'next_page'     => $next_page,
            'prev_page_url' => $prev_page_url,
            'next_page_url' => $next_page_url,
        ];
    }
}
