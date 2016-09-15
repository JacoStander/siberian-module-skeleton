<?php
/**
 * Class Job_Form_Company
 */
class Job_Form_Options extends Siberian_Form_Abstract {

    public function init() {
        parent::init();

        $this
            ->setAction(__path("/job/application/editoptionspost"))
            ->setAttrib("id", "form-options")
        ;

        /** Bind as a onchange form */
        self::addClass("onchange", $this);

        $display_search = $this->addSimpleCheckbox("display_search", __("Display Search"));
        $display_logo = $this->addSimpleCheckbox("display_logo", __("Display Logo"));

        $value_id = $this->addSimpleHidden("value_id");
        $value_id
            ->setRequired(true)
        ;
    }
}