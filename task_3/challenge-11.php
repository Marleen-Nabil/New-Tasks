<?php
declare (strict_types=1);
function getStatusMessage (int $status): string 
{
    $msg = match ($status) {
   200  => 'OK / Request successful',
    201 => 'Created successfully',
    400 => 'Bad request',
    401 => 'Unauthorized',
    403 => 'Forbidden / Access denied',
    404 => 'Not found',
    500 => 'Internal server error',
    default => 'Invalid Number'
};
return '';
}
$msg = getStatusMessage (200);
echo $msg;
