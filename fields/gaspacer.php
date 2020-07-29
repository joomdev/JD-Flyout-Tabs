<?php
/*-------------------------------------------------------------------------------
# mod_galleryaholic - JD GalleryAholic for Joomla 3.x v1.5.0-PRO
# -------------------------------------------------------------------------------
# author    JoomDev (Formerly GraphicAholic)
# copyright Copyright (C) 2020 Joomdev, Inc. All rights reserved.
# @license - GNU General Public License version 2 or later
# Websites: https://www.joomdev.com
--------------------------------------------------------------------------------*/
// no direct access
defined('_JEXEC') or die('Restricted access');

class JFormFieldGaspacer extends JFormField {

    protected $type = 'gaspacer';

    protected function getInput() {
        return ' ';
    }

    protected function getLabel() {
        $html = array();
        $class = $this->element['class'] ? (string) $this->element['class'] : '';

        $style = $this->element['style'];
        $styles = '';
        if ($style == 'title')
            $styles = ' style="display:block;background:rgba(153,0,0,0.7);padding:5px;color:rgba(255,255,255,1);min-width:400px;text-transform:none;font-size:14px;border-radius:3px;text-shadow:1px 1px 2px rgba(0,0,0,1);text-indent: 10px;"';
        if ($style == 'link')
            $styles = ' style="display:block;background:#efefef;padding:5px;color:#000;min-width:400px;line-height:25px;border-radius:3px;"';

        $html[] = '<span class="spacer">';
        $html[] = '<span class="before"></span>';
        $html[] = '<span class="' . $class . '">';
        if ((string) $this->element['hr'] == 'true') {
            $html[] = '<hr class="' . $class . '" />';
        } else {
            $label = '';
            // Get the label text from the XML element, defaulting to the element name.
            $text = $this->element['label'] ? (string) $this->element['label'] : (string) $this->element['name'];
            $text = $this->translateLabel ? JText::_($text) : $text;

            // Build the class for the label.
            $class = !empty($this->description) ? 'hasTip' : '';
            $class = $this->required == true ? $class . ' required' : $class;

            // Add the opening label tag and main attributes attributes.
            $label .= '<label id="' . $this->id . '-lbl" class="' . $class . '"';

            // If a description is specified, use it to build a tooltip.
            if (!empty($this->description)) {
                $label .= ' title="' . htmlspecialchars(trim($text, ':') . '::' .
                                ($this->translateDescription ? JText::_($this->description) : $this->description), ENT_COMPAT, 'UTF-8') . '"';
            }

            // Add the label text and closing tag.
            $label .= $styles . '>';
            // $label .= $icon ? '<img src="' . $this->getPathToImages() . '/images/' . $icon . '" style="margin-right:5px;" />' : '';
            $label .= $text . '</label>';
            $html[] = $label;
        }
        $html[] = '</span>';
        $html[] = '<span class="after"></span>';
        $html[] = '</span>';
        return implode('', $html);
    }
    protected function getTitle() {
        return $this->getLabel();
    }
}



