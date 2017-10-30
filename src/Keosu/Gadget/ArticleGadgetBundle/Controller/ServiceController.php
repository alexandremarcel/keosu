<?php
/************************************************************************
 * Keosu is an open source CMS for mobile app
 * Copyright (C) 2016  Pockeit
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 ************************************************************************/
namespace Keosu\Gadget\ArticleGadgetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * REST Service controller dedicated to the curent gadget
 * @author vleborgne
 *
 */
class ServiceController extends Controller
{

    public function viewOneAction($gadgetId, $format)
    {
        $em = $this->get('doctrine')->getManager();
        $gadget = $em->getRepository('KeosuCoreBundle:Gadget')->find($gadgetId);
        $gadgetConfig = $gadget->getConfig();
        $article = $em->getRepository('KeosuDataModelArticleModelBundle:ArticleBody')->find($gadgetConfig["article-id"]);
        $ret = array(
            'id' => $article->getId(),
            'dataModelObjectName' => $article->getDataModelObjectName(),
            'title' => $article->getTitle(),
            'enableComments' => $article->getEnableComments(),
            'shareUrl' => $article->getShareUrl(),
            'content' => $article->getBody()
        );
        $attachments = $article->getAttachments();
        if (count($attachments) > 0) {
            foreach ($attachments as $key => $attachment) {
                $ret['attachments'][$key]['path'] = $this->container->getParameter('url_base') . $attachment->getWebPath();
            }
        }
        return new JsonResponse($ret);
    }
}

?>
