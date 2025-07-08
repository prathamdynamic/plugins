defined('MOODLE_INTERNAL') || die();

$filepath = $CFG->dirroot . '/local/iomad/lib/iomad.php';

if (file_exists($filepath)) {
    require_once($filepath);