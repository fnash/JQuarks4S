<?php
/**
 * JQuarks4s Component Data Manager View
 *
 * @version     $Id$
 * @author      IP-Tech Labs <labs@iptech-offshore.com>
 * @copyright   2010 IP-Tech
 * @package     JQuarks4s-Back-End
 * @subpackage  Views
 * @link        http://www.iptechinside.com/labs/projects/show/jquarks-for-surveys
 * @since       1.0.0
 * @license     GNU/GPL2
 *
 *    This program is free software; you can redistribute it and/or
 *  modify it under the terms of the GNU General Public License
 *  as published by the Free Software Foundation; version 2
 *  of the License.
 *
 *    This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 *  or see <http://www.gnu.org/licenses/>
 */

defined('_JEXEC') or die();

jimport('joomla.application.component.view');


class JQuarks4sViewDatamanager extends JView
{
    function display($tpl = null)
    {
        //$var =& $this->get( 'var' );

        //$this->assignRef( 'var', $var );

        // TOOLBAR
  		Jquarks4sToolBarHelper::title( JText::_( 'IMPORT_EXPORT' ), 'export.png' );
        //JToolBarHelper::deleteList(JText::_('CONFIRM_SUPPRESSION_RECORDS'));
		//JToolBarHelper::editListX();
		//JToolBarHelper::addNewX();

        // SUBMENU
        JSubMenuHelper::addEntry( JText::_( 'JQUARKS4S_HOME' ), 'index.php?option=com_jquarks4s');
        JSubMenuHelper::addEntry( JText::_( 'SURVEYS' ),        'index.php?option=com_jquarks4s&controller=surveys');
        JSubMenuHelper::addEntry( JText::_( 'SECTIONS'),        'index.php?option=com_jquarks4s&controller=sections');
        JSubMenuHelper::addEntry( JText::_( 'QUESTIONS' ),      'index.php?option=com_jquarks4s&controller=questions');
        JSubMenuHelper::addEntry( JText::_( 'ANSWERS' ),       'index.php?option=com_jquarks4s&controller=sessions');
        JSubMenuHelper::addEntry( JText::_( 'ANALYSES' ),       'index.php?option=com_jquarks4s&controller=analysis');
        JSubMenuHelper::addEntry( JText::_( 'IMPORT_EXPORT' ),  'index.php?option=com_jquarks4s&controller=datamanager', true);

        parent::display($tpl);
    }

}