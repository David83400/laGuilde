<?php

namespace Projet5\Core;

class Form
{
    private $formCode = '';

    /**
     * Génère le formulaire html
     *
     * @return string
     */
    public function create()
    {
        return $this->formCode;
    }

    /**
     * Valide si tous les champs proposés sont remplis
     *
     * @param array $form Tableau issu du formulaire ($_POST, $_GET)
     * @param array $ranges Tableau listant les champs obligatoires
     * @return bool
     */
    public static function validate(array $form, array $ranges)
    {
        foreach ($ranges as $range) {
            if (!isset($form[$range]) || empty($form[$range])) {
                return false;
            }
        }
        return true;
    }

    /**
     * Ajoute les attributs envoyés à la balise
     *
     * @param array $attributes Tableau associatif ['class' => 'form-control', 'required' => true]
     * @return string Chaine de caractères générée
     */
    private function addAttributes(array $attributes): string
    {
        // On initialise une chaine de caractères
        $str = '';

        // On liste les attributs 'courts'
        $shorts = ['checked', 'disabled', 'readonly', 'multiple', 'required', 'autofocus', 'novalidate', 'formnovalidate'];

        // On boucle sur le tableau d'attributs
        foreach ($attributes as $attribute => $value) {
            if (in_array($attribute, $shorts) && $value === true) {
                $str .= " $attribute";
            } else {
                $str .= " $attribute='$value'";
            }
        }

        return $str;
    }

    /**
     * Crée la balise d'ouverture du formulaire
     *
     * @param string $method Méthode du formulaire (post ou get)
     * @param string $action Action du formulaire
     * @param array $attributes Attributs du formulaire
     * @return Form
     */
    public function initForm(string $method = 'post', string $action = '#', array $attributes = []): self
    {
        // On crée la balise form
        $this->formCode = "<form action='$action' method='$method'";

        $this->formCode .= $attributes ? $this->addAttributes($attributes) . '>' : '>';

        return $this;
    }

    /**
     * Balise de fermeture du formulaire
     *
     * @return Form
     */
    public function endForm(): self
    {
        $this->formCode .= "</form>";

        return $this;
    }

    /**
     * Opening of the div tag 
     *
     * @param array $attributes
     * @return self
     */
    public function initDiv(array $attributes = []): self
    {
        $this->formCode .= "<div";

        $this->formCode .= $attributes ? $this->addAttributes($attributes) . '>' : '>';

        return $this;
    }

    /**
     * Closing of the div tag
     *
     * @return self
     */
    public function endDiv(): self
    {
        $this->formCode .= "</div>";

        return $this;
    }

    /**
     * Ajout d'un label
     *
     * @param string $for
     * @param string $text Texte du label
     * @param array $attributes
     * @return Form
     */
    public function addLabelFor(string $for, string $text, array $attributes = []): self
    {
        $this->formCode .= "<label for='$for'";

        $this->formCode .= $attributes ? $this->addAttributes($attributes) : '';

        $this->formCode .= ">$text</label>";

        return $this;
    }

    public function addInput(string $type, string $name, array $attributes = []): self
    {
        $this->formCode .= "<input type='$type' name='$name'";

        $this->formCode .= $attributes ? $this->addAttributes($attributes) . '>' : '>';

        return $this;
    }

    public function addTextarea(string $name, string $value = '', array $attributes = []): self
    {
        $this->formCode .= "<textarea name='$name'";

        $this->formCode .= $attributes ? $this->addAttributes($attributes) : '';

        $this->formCode .= ">$value</textarea>";

        return $this;
    }

    public function addSelect(string $name, array $options, array $attributes = []): self
    {
        $this->formCode .= "<select name='$name'";

        $this->formCode .= $attributes ? $this->addAttributes($attributes) . '>' : '>';

        foreach ($options as $value => $text) {
            $this->formCode .= "<option value='$value'>$text</option>";
        }

        $this->formCode .= '</select>';

        return $this;
    }

    public function addButton(string $type, string $name, string $text, array $attributes = []): self
    {
        $this->formCode .= "<button type='$type' name='$name'";

        $this->formCode .= $attributes ? $this->addAttributes($attributes) : '';

        $this->formCode .= ">$text</button>";

        return $this;
    }

    public function addSpan(string $text, array $attributes = []): self
    {
        $this->formCode .= "<span ";

        $this->formCode .= $attributes ? $this->addAttributes($attributes) : '';

        $this->formCode .= ">$text</span>";

        return $this;
    }

    public function addLink(string $href, string $text, array $attributes = []): self
    {
        $this->formCode .= "<a href='$href'";

        $this->formCode .= $attributes ? $this->addAttributes($attributes) : '';

        $this->formCode .= ">$text</a>";

        return $this;
    }
}
