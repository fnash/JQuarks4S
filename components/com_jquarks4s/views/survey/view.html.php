<?php
/**
 * JQuarks4s Component survey view
 *
 * @version     $Id$
 * @author      IP-Tech Labs <labs@iptech-offshore.com>
 * @copyright   2010 IP-Tech
 * @package     JQuarks4s-Front-End
 * @link        http://www.iptechinside.com/labs/projects/show/jquarks-for-surveys
 * @since       1.1.2
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


defined('_JEXEC') or die('');

jimport('joomla.application.component.view');


class JQuarks4sViewSurvey extends JView
{

    function display($tpl = null)
    {
        $model =& $this->getModel('jquarks4s');

        $survey_id = JRequest::getInt('id');
        $user =& JFactory::getUser();
        $user_id = $user->id;

        $isAllowedUser = $model->isAllowedUser($survey_id, $user_id);
        if ( ! $isAllowedUser) {
            $rows = null;
        } else {
            $rows =& $model->getSurvey($survey_id);
        }

        $this->assignRef('rows', $rows);
        $this->assignRef('survey_id', $survey_id);
        $this->assignRef('user_id', $user_id);

        parent::display($tpl);
    }
}
