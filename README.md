lots of thx to the northwood for presenting such a wonderful js library.

well, I'm still learning it, and want to share some feature here:

```

myDiagram.nodeTemplate =
     $(go.Node, "Spot",
       ...
       { // handle mouse enter/leave events to show/hide the ports
         mouseEnter: function(e, node) { showSmallPorts(node, true); },
         mouseLeave: function(e, node) { showSmallPorts(node, false); },
          // second arg will be this GraphObject, which in this case is the Node itself:
          click: function(e, node) {
            window.open("http://en.wikipedia.org/Wiki/" + node.data.key);
          }
       }
     );
     
```
the click thing in the bottom can get browser to do things when you clicked a node.

> the following lines come from the northwoods posts


---

```

GoJS Samples
============

This repository contains all [GoJS](http://gojs.net) samples, extensions, and documentation.

You can use this repository to quickly [search through all of the sources](https://github.com/NorthwoodsSoftware/GoJS-Samples/search?q=setDataProperty&type=Code).

To explore the full listing of GoJS samples, open `samples/index.html`.

Read more about GoJS: http://gojs.net

##Support

Northwoods Software Corporation offers free developer-to-developer technical support for GoJS to help you get started on your project
through the official <a href="http://forum.nwoods.com/c/gojs">GoJS forum</a>.
Posting in the forum is the fastest and most effective way of obtaining technical support for any GoJS related inquiries.
Please register for support at Northwoods Software's <a href="http://www.nwoods.com/products/register.html">registration form</a> before posting in the forum.

For any nontechnical questions about GoJS, such as about sales or licensing,
please visit Northwoods Software's <a href = "http://www.nwoods.com/contact.html">contact form</a>.
```