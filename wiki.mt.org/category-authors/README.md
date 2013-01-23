# Create a List of Authors in a Category

If you want to show a list of authors who have posted in a given category on that category's archive page, use an Entries loop inside an Authors loop. As you loop through the Authors, set an MT variable to the name of the current author, and pass that to the Entries loop and limit that Entries loop to the most recent one. Display the author's name. All the normal EntryAuthor tags will work within the Entries loop.

```
<ul>
    <mt:Authors>
        <mt:SetVarBlock name="new_author"><mt:AuthorName/></mt:SetVarBlock>
        <mt:Entries author="$new_author" lastn="1">
            <li><mt:EntryAuthorDisplayName/></li>
        </mt:Entries>
    </mt:Authors>
</ul>
```
