<?php

function getDeviceType() {
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    
    // Vérifiez si l'utilisateur utilise un appareil mobile
    $isMobile = preg_match('/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i', $userAgent);

    if ($isMobile) {
        // Vérifiez si l'utilisateur utilise une tablette
        $isTablet = preg_match('/(tablet|ipad|playbook|silk)|(android(?!.*mobile))/i', $userAgent);
        if ($isTablet) {
            return 'tablet';
        } else {
            return 'mobile';
        }
    } else {
        return 'desktop';
    }
}

// Exemple d'utilisation
$deviceType = getDeviceType();
echo "Le type d'appareil est : " . $deviceType;
?>
