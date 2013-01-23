Actually, this can be used to apply text filters to anything. In my Entry Summary and Entry Detail templates, I originally had this:

```
<h1><a href="<mt:EntryPermalink/>"><mt:EntryTitle/></a></h1>
```

Which works fine, but what I really wanted was to apply Smartypants to get proper punctuation. So I came up with this:

```
<mt:SetVarBlock name="markdown_title"># <a href="<mt:EntryPermalink/>"><mt:EntryTitle/></a></mt:SetVarBlock>
<mt:Var name="markdown_title" filters="markdown_with_smartypants"/>
```

Which does exactly what I want. It also means I could do things like add asterisks around words in a title to make them bold or italic.
