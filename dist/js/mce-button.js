(function () {
  tinymce.create("tinymce.plugins.column_button", {
    init: function (ed, url) {
      ed.addButton("column_button", {
        title: "Indsæt Column-knap",
        icon: false,
        classes: "column-button",
        onclick: function () {
          /*let columnNumber = prompt("Indtast knaptekst:", "Antal kolonner");
                    if (columnNumber === null) return;*/

          let node = ed.selection.getNode();

          // Find nærmeste blok-element
          let block = ed.dom.getParent(
            node,
            "p,ul,ol,h1,h2,h3,h4,h5,h6,blockquote",
          );

          if (!block) {
            alert("Marker en liste først");
            return;
          }

          let wrapper = ed.dom.create("div", {
            class: "editor-col-2",
          });

          // Indsæt wrapper før blok-elementet
          ed.dom.insertAfter(wrapper, block);

          // Flyt elementet ind i wrapperen
          wrapper.appendChild(block);
        },
      });
    },
    createControl: function (n, cm) {
      return null;
    },
  });

  tinymce.PluginManager.add("column_button", tinymce.plugins.column_button);
})();
