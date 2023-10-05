<?php
Kirby::plugin('mountbatt/persons-block', [
  'blueprints' => [
    'blocks/persons' => __DIR__ . '/blueprints/blocks/persons.yml'
  ],
  'snippets' => [
<<<<<<< HEAD
    'blocks/persons' => __DIR__ . '/snippets/blocks/persons.php'
  ],'translations' => [
    'en' => [
      'field.blocks.persons.empty' => 'No persons selected',
      'field.blocks.persons.name' => 'Persons',
      'field.blocks.persons.section_headline' => 'Section-Heading',
    ],
    'de' => [
       'field.blocks.persons.empty' => 'Keine Personen ausgewählt',
       'field.blocks.persons.name' => 'Personen',
       'field.blocks.persons.section_headline' => 'Abschnitts-Überschrift',
=======
    'blocks/accordion' => __DIR__ . '/snippets/blocks/accordion.php'
  ],'translations' => [
    'en' => [
      'field.blocks.accordion.empty' => 'Please add some entries into your accordion …',
      'field.blocks.accordion.name' => 'Accordion',
      'field.blocks.accordion.nameentries' => 'Akkordion entries',
      'field.blocks.accordion.showasfaq' => 'Show as FAQ-Schema for Google?',
      'field.blocks.accordion.question' => 'Question',
       'field.blocks.accordion.answer' => 'Answer',
       'field.blocks.accordion.openonload' => 'Open element on load?',
       'field.blocks.accordion.open' => 'Open',
       'field.blocks.accordion.desc_question' => 'Add title or question here …',
        'field.blocks.accordion.desc_answer' => 'Add collapsed answer here …',
    ],
    'de' => [
       'field.blocks.accordion.empty' => 'Bitte füge ein paar Einträge in Dein Akkordeon ein …',
       'field.blocks.accordion.name' => 'Akkordeon',
       'field.blocks.accordion.nameentries' => 'Akkordeon-Einträge',
       'field.blocks.accordion.showasfaq' => 'Als FAQ-Schema für Google anzeigen?',
       'field.blocks.accordion.question' => 'Frage',
       'field.blocks.accordion.answer' => 'Antwort',
       'field.blocks.accordion.openonload' => 'Element beim Start öffnen?',
       'field.blocks.accordion.open' => 'Offen',
       'field.blocks.accordion.desc_question' => 'Füge hier den Titel oder die Fragestellung ein …',
       'field.blocks.accordion.desc_answer' => 'Füge hier die zugeklappte Antwort ein …',
>>>>>>> 5961f4408918795e28d0e569b80805749b7ddba9
  
    ],
    // more languages
  ]
]);