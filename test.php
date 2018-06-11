<?php

class TimeTravel
{
    private $start;
    private $end;

    public function __construct(DateTime $start, DateTime $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    public function getTravelInfo($start, $end)
    {
        $diff = $start->diff($end);
        return "Doc s'est téléporté " . $diff->format('%y années %m mois %d jours') . " dans le passé !<hr>";
    }

    public function findDate($interval)
    {
        return "Ouuuuuuuuuuuuuuch ! Suite au bug, Doc a atteri, a été renvoyé le : " . $this->start->sub($interval)->format('d-m-Y');
    }

    public function backToFutureStepByStep($step)
    {
        $result = [];
        $dateRange = new DatePeriod($this->start, $step, $this->end);
        foreach ($dateRange as $date) {
            $result[] = $date->format("Y-m-d");
        }

        return $result;
    }

    /**
     * @return mixed
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param mixed $start
     */
    public function setStart($start)
    {
        $this->start = $start;
    }

    /**
     * @return mixed
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @param mixed $end
     */
    public function setEnd($end)
    {
        $this->end = $end;
    }

}