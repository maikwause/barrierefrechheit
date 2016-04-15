<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  blockhead:
    label: Überschrift im Zusatzblock
    type: text
  block: 
    label: Text Zusatzblock
    type: textarea 
  tags:
    label: Tags
    type: tags
    index: all
  related:
    label: Verwandte Artikel
    type: textarea
  links:
    label: Links
    type: structure
    fields:
      url:
        label: Linkadresse
        type: text
      beschreibung:
        label: Beschreibung
        type: text