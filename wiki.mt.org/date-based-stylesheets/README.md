You can use simple date comparisons to condition the load of a special stylesheet based on the date of the entry.

First, create a variable, storing the date of the entry in a numerical form (ie, January 15, 2007 would be represented as '20070115'):

```
<mt:SetVarBlock name="date"><mt:EntryDate format="%Y%m%d"/></mt:SetVarBlock>
```

This stores the date in a form we can use to do numerical comparisons using Movable Type's "If" and "Else" tags.

```
<mt:SetVarBlock name="stylesheet"><mt:If name="date" gt="20070510" strip_linefeeds="1" trim="1">stylesheet.css<mt:Else><mt:If name="date" gt="20060409">stylesheet-old.css<mt:Else>stylesheet-really-old.css</mt:If></mt:If></mt:SetVarBlock>
```

Then, just reference your stylesheet file:

```
<link href="<mt:BlogURL/><mt:Var name="stylesheet"/>" type="text/css" rel="stylesheet"/>
```

If your stylesheets are consistently changing every year, you can simplify all of this to simply:

```
<link href="<mt:BlogURL/>stylesheet-<mt:Entrydate format="%Y"/>.css" type="text/css" rel="stylesheet"/>
```

But you will need to have a "stylesheet-2007.css", "stylesheet-2006.css", etc., for each year you have published entries.
