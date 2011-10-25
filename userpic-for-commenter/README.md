# Userpic for commenter

 * If commenter have userpic -> display this
 * If doesn't:
    * If commenter type = OpenID or Facebook:
        * If commenter type = OpenID -> display favicon
        * If commenter type = Facebook -> display Facebook photo
    * If commenter type not OpenID or Facebook -> display Gravatar userpic

 * Echo Display name and:
    * If commenter not anonymous:
        * If commenter have URL -> display this and auth icon
        * If commenter type = Facebook -> display link to Facebook profile and auth icon
        * If commenter doesn't have URL -> display only auth icon

## Requires

 * PHP filename extension for published files (.php)
 * Gravatar plugin
 * Email for commenters.
 * Facebook auth plugin.
