<?php
function checkRole ( string $role) : string
{
    switch ($role){
        case 'Admin':
            echo 'Has full control over the website.';
            break;
            case 'Editor':
            echo 'Can edit and manage content.';
            break;
            case 'Author':
            echo 'Can create and publish their own content.';
            break;
            case 'User':
            echo 'Can access the website and use its features.';
            break;
            case 'Guest':
            echo 'Can view limited content without logging in.';
            break;
            default: 
            echo 'Role invalid name';

    }
return '';
}
$role_msg = checkRole ('Guest');
echo $role_msg;