namespace BanManager;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\entity\Entity;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommmandSender;
use pocketmine\command\Command;
use pocketmine\even\Listener;
use pocketmone\event\PlayerQuitEvent;
use pocketmine\event\PlayerJoinEvent;
use pocketmine\event\PlayerPreLogin;
use pocketmine\utils\TextFormat as TE;
use pocketmine\utils\Config;

class Main extends PluginBase{
 public function onEnable():
 $this->getServer()->getPluginManager()->registerEvents($this, $this);
