It's pretty easy to make a fancy commenter list, so instead of just saying "Comments (9)" or something like that, you can list the actual names of your commenters, like "Comments by Rebbie, Sigmund, Toriano, Jermaine, Marlon, Michael, LaToya, Randy and Janet". Seeing the names lets people know who visits your site, and gives a real sense of community and belonging to your commenters.

You can use code like this for a bullet-separated list:

```
<mt:Comments>
    <mt:CommentsHeader>
        <mt:Else> &amp;bull; </mt:Else>
    </mt:CommentsHeader>
    <a href="<mt:EntryPermalink/>#comment-<mt:CommentID/>"><mt:CommentAuthor/></a>
</mt:Comments>
```

That snippet also links each commenter's name to the comment that they left. Then, you can get a little fancier by only showing a list like that if there are comments on an entry, and otherwise prompting people to start leaving some:

```
<mt:IfNonZero tag="MTEntryCommentCount">
    <mt:Comments>
        <mt:CommentsHeader>
            <mt:Else> &amp;bull; </mt:Else>
        </mt:CommentsHeader>
        <a href="<mt:EntryPermalink/>#comment-<mt:CommentID/>"><mt:CommentAuthor/></a>
    </mtcomments>
    <MTElse>
        <a href="<mt:EntryPermalink/>#comments">Leave a comment &raquo;</a> 
</mtifnonzero>
```
