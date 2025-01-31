<?php

class HtmlComponent {

    public static function h1($text) {
        return "<h1>" . $text . "</h1>";
    }

    public static function h2($text) {
        return "<h2>" . $text . "</h2>";
    }

    public static function h3($text) {
        return "<h3>" . $text . "</h3>";
    }

    public static function p($text) {
        return "<p>" . $text . "</p>";
    }

    public static function header($content) {
        return "<header>" . $content . "</header>";
    }

    public static function section($content) {
        return "<section>" . $content . "</section>";
    }

    public static function main($content) {
        return "<main>" . $content . "</main>";
    }

    public static function footer($content) {
        return "<footer>" . $content . "</footer>";
    }
}


// Example usage (mimicking your provided code structure):

define("H1", "My Portfolio Title"); // Define your constant

echo HtmlComponent::header(HtmlComponent::h1(H1));

echo HtmlComponent::section(
    HtmlComponent::h2("Section Title") .
    HtmlComponent::p("Welcome to my portafolio.<br>A section starts with each heading")
);

echo HtmlComponent::main(
    HtmlComponent::h2("Activities") .

    HtmlComponent::section(
        HtmlComponent::h3("Crypto Games") .
        HtmlComponent::p("Welcome to my portafolio.")
    ) .

    HtmlComponent::section(
        HtmlComponent::h3("Earn Money Playing Games") .
        HtmlComponent::p("Welcome to my portafolio.")
    ) .

    HtmlComponent::section(
        HtmlComponent::h3("Learn is my passion") .
        HtmlComponent::p("Welcome to my portafolio.")
    )
);


echo HtmlComponent::footer(HtmlComponent::p("Welcome to my portafolio."));

?>