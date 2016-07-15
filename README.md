# TYPO3 Eventapi


The goal of this extension is to provide a clean unified event api for tcemain and extbase
in order to avoid implementations for both approaches and to avoid duplicate code to
determine what happened to an entity. Nothing more and nothing less :)

# And for what can i use it?

You can use it to React on an event syncronously or asychnornously. An example could be,
you can export a page, when you know a changed was done.

# Concept

The events are hierarchically structured according to the PHP namespace:

e.g.

 'Event::Page::Changed::Sibling'

or

 'Event::Page::Changed'

You can register your Application to be notified for about an event in an abstract or concrete namespace:


$eventDispatcher = ...
$eventDispatcher->subscribe('Event::Page', function($event) {
    //do whatever you want here
});


# Planned Events


# Event::Page::Changed::Self.

This event will be triggered when the page self was changed.

# Event::Page::Changed::Sibling.

This event will be triggered on each sibling page of a page that was changed.

# Event::Page::Changed::Parent

This event will be triggered on the parent page of a page that was changed.

# Event::Page::Changed::Translation

# Event::Page::Changed::Rootline

# Event::Page::Changed::Reference
