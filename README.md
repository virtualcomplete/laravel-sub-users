# Laravel User Hierarchy (Sub Users)

Allows parent and child relationships with users creating sub-user functionality and a user hierarchy.

## Parents and Children

The basic structure is that a parent user can have multiple children.  This is a very simple extension to the users table and User model.   Theoretically there is no limit to the number of generations of children, however, a child can only have one direct parent.

## ParentUser

Functionality:  Allows parent and child relationships with users creating sub-user functionality.

Adds the field to the users table:

* parent_id

**Installation Steps:**

1.  Copy and run the user_parent_id migration
2.  Add `implements ParentUserInterface` to your User Model
3.  Add `use ParentUserTrait` to your User Model
