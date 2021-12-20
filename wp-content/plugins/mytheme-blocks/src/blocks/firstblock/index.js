var registerBlockType = wp.blocks.registerBlockType;
var __ = wp.i18n.__;
// var el = wp.element.createElement;

registerBlockType("mytheme-blocks/firstblock", {
  title: __("First Block", "mytheme-blocks"),
  description: __("Our first block", "mytheme-blocks"),
  category: "layout",
  icon: "admin-tools",
  edit: function () {
    return "Well hello there wp world";
    // return el("p", null, "Well hello there wp react world");
  },
  save: function () {
    return "Well hello there wp world";

    // return el("p", null, "Well hello there saved wp react world");
  },
});
