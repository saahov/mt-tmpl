This recipe provides a way to display sticky entries at the top of the page without replicating those entries further down the page.

```
<mt:Entries tags="@sticky" lastn="1">
    <mt:EntryTitle/><br/>
</mt:Entries>

<mt:Entries lastn="10" unique="1">
    <mt:EntryTitle/><br/>
</mt:Entries>
```

Entries can be assigned "private tag" denoted by the "@" prepended to the beginning of the tag name. These tags are assigned by the author of the entry or page and are never made visible publicly.

Using this tag one can define a special tag called "sticky" which designates an entry you want to stick to the top of the page.

This tag is used to filter your first code block.

The second mt:Entries tag block is used to display more entries below it. The unique="1" attribute ensure that if none of the entries that appeared previously on the page (in this case a sticky entry) will appear again on the page - ensuring that a sticky entry appears once and only once on the page.
