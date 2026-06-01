<?php
class My_Rehab_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'rehab_custom_widget';
    }

    public function get_title() {
        return esc_html__( 'My Rehab Widget', 'rehab-wellness-theme' );
    }

    public function get_icon() {
        return 'eicon-code';
    }

    // এখানে আপনার নতুন ক্যাটাগরি সেট করুন
    public function get_categories() {
        return [ 'rehab-widgets' ];
    }

    protected function render() {
        echo '<div>আপনার কাস্টম রিহ্যাব উইজেট কন্টেন্ট এখানে থাকবে।</div>';
    }
}