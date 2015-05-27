<?php
class bla_fixacq_oxarticle extends bla_fixacq_oxarticle_parent
{
    public function getActiveCheckQuery($blForceCoreTable = null)
    {
        $sQ = parent::getActiveCheckQuery($blForceCoreTable);
        $sTable = $this->getViewName($blForceCoreTable);

        $sQ .= " and IF( $sTable.oxparentid != '', ( select 1 from $sTable as vater where vater.oxid=$sTable.oxparentid and ".str_replace($sTable,'vater',$sQ)." ), 1)";

        return $sQ;
    }
}